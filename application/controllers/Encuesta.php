<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Encuesta extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Encuestas_model");
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('layout/form');
	}
	public function store()
	{
		//Datos del cliente
		$razon_social = $this->input->post("razon");
		$regimen = $this->input->post("regimen");
		$pago_sat = $this->input->post("pago_sat");
		$rfc = $this->input->post("rfc");
		$cp = $this->input->post("cp");
		$uso_cfi = $this->input->post("uso_cfi");
		// $constancia = $this->input->post("constancia");
		// $cumplimiento = $this->input->post("cumplimiento");
		// $comprobante = $this->input->post("comprobante");

		$mi_imagen = 'mi_archivo1';
		$mi_imagen2 = 'mi_archivo2';
		$mi_imagen3 = 'mi_archivo3';

		mkdir("assets/documentos/" . $rfc);
		
		$config['upload_path'] = "assets/documentos/" . $rfc;
		$config['encrypt_name'] = TRUE;
		// $config['file_name'] = $rfc . "_constancia";
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = "pdf";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_imagen)) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			return;
		} else {
			$data['uploadSuccess'] = $this->upload->data();
			$file_info = $this->upload->data();
			$archivo = $file_info['file_name'];
			if (!$this->upload->do_upload($mi_imagen2)) {
				//*** ocurrio un error
				$data['uploadError'] = $this->upload->display_errors();
				echo $this->upload->display_errors();
				return;
			} else {
				$data['uploadSuccess'] = $this->upload->data();
				$file_info2 = $this->upload->data();
				$archivo2 = $file_info2['file_name'];

				if (!$this->upload->do_upload($mi_imagen3)) {
					//*** ocurrio un error
					$data['uploadError'] = $this->upload->display_errors();
					echo $this->upload->display_errors();
					return;
				} else {
					$data['uploadSuccess'] = $this->upload->data();
					$file_info3 = $this->upload->data();
					$archivo3 = $file_info3['file_name'];

					$dataInfo  = array(
						'razon_social' => $razon_social,
						'rfc' => $rfc,
						'regimen_fiscal' => $regimen,
						'codigo_postal' => $cp,
						'pago_sat' => $pago_sat,
						'uso_cfi' => $uso_cfi,
						'constancia_situacion_fiscal' => $archivo,
						'cumplimiento_positiva_al_presente' => $archivo2,
						'comprobante_de_domicilio' => $archivo3,
						'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
						'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
					);
					if ($this->Encuestas_model->save($dataInfo)) {

						redirect(base_url() . "encuesta/fin");
					} else {
						$this->session->set_flashdata("error", "No se pudo guardar la informacion");
						redirect(base_url());
					}
				}
			}
		}
	}
	
	public function fin()
	{
	
		//$this->load->view('welcome_message');
		$this->load->view('layout/view');
	}
}
