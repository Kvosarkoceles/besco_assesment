<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Encuestas_model extends CI_Model
{

	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("datos", $data);
	}
}