<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BESCO</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url(); ?>assets/dist/img/favicon.png" sizes="16x16 24x24 36x36 48x48">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://gdsnet.mx/unionmachinerylatam_cfdi40/assets/dist/js/menu.js"></script>
    <script type="text/javascript">
        function confirmation() {
            if (confirm("La informacion proporcionada es correcta?")) {
                return true;
            } else {
                // window.location.href = "../";
                return false;
            }
        }
    </script>

    <script>
        function getTimeDateCustom() {
            var x = document.getElementById("liveTimeStr");
            var defaultVal = x.defaultValue;
            var currentVal = x.value;

            if (defaultVal == currentVal) {
                document.getElementById("example").innerHTML = "Default value and active value is the same: " +
                    x.defaultValue + " and " + x.value +
                    "<br>Update the value of the time field to display the difference!";
            } else {
                document.getElementById("example").innerHTML = "The default value was: " + defaultVal +
                    "<br>The new, active value is: " + currentVal;
            }
        }
    </script>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar">
            <!-- Brand Logo -->
            <a href="<?php echo base_url(); ?>" class="brand-link">
                <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->

        <form action="<?php echo base_url(); ?>encuesta/store" method="POST" enctype="multipart/form-data" onsubmit="return confirmation()">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>BESCO</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active">Encuesta</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                    <!-- Datos Personales -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos del Usuario</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Nombres del usuario -->
                            <div class="row mt-5">
                                <!-- Nombre´s -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="Marca">Nombre´s</label>
                                        <input type="text" name="nombres" id="nombres">
                                    </div>
                                </div>
                                <!-- Apellido Paterno -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="Marca">Apellido Paterno</label>
                                        <input type="text" name="apellido_paterno" id="apellido_paterno">
                                    </div>
                                </div>
                                <!-- Apellido Materno -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="Marca">Apellido Materno</label>
                                        <input type="text" name="apellido_materno" id="apellido_materno">
                                    </div>
                                </div>
                            </div>
                            <!-- Número de serie del equipo -->
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="Marca">Número de serie del equipo</label>
                                        <input type="text" name="numero_serie" id="numero_serie">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Funcionamiento De Dispositivos -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Funcionamiento De Dispositivos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- /.card-header -->
                            <div class="row">
                                <!-- Primera columna -->
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="border: hidden"></th>
                                                <th style="border: hidden">Funcionamiento de dispositivos</th>
                                                <th style="border: hidden">Si</th>
                                                <th style="border: hidden">No</th>
                                                <th style="border: hidden">Observaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 - Micrófono -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">1.</td>
                                                <td style="border: hidden">Micrófono</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                            </tr>
                                            <!-- 2 - Sonido -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">2.</td>
                                                <td style="border: hidden">Sonido</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="sonido" id="sonido" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="sonido" id="sonido" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="sonido_observaciones" id="sonido_observaciones"></td>
                                            </tr>
                                            <!-- 3 - Cámara -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">3.</td>
                                                <td style="border: hidden">Cámara</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="camara" id="camara" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="camara" id="camara" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="camara_observaciones" id="camara_observaciones"></td>
                                            </tr>
                                            <!-- 4 - Red por cable -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">4.</td>
                                                <td style="border: hidden">Red por cable</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="ethernet" id="ethernet" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="ethernet" id="ethernet" value="0                                                                                      ">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="ethernet_observaciones" id="ethernet_observaciones"></td>
                                            </tr>
                                            <!-- 5 - Red inalámbrica -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">5.</td>
                                                <td style="border: hidden">Red inalámbrica</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="wifi" id="wifi" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="wifi" id="wifi" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="wifi_observaciones" id="wifi_observaciones"></td>
                                            </tr>
                                            <!-- 6 - Bluetooth -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">6.</td>
                                                <td style="border: hidden">Bluetooth</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="bluetooth" id="bluetooth" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="bluetooth" id="bluetooth" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="bluetooth_observaciones" id="bluetooth_observaciones"></td>
                                            </tr>
                                            <!-- 7 - Teclado -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">7.</td>
                                                <td style="border: hidden">Teclado</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="teclado" id="teclado" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="teclado" id="teclado" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="teclado_observaciones" id="teclado_observaciones"></td>
                                            </tr>
                                            <!-- 8 - Touchpad -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">8.</td>
                                                <td style="border: hidden">Touchpad</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="touchpad" id="touchpad" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="touchpad" id="touchpad" value="0">
                                                </td>
                                                <td><input type="text" name="touchpad_observaciones" id="touchpad_observaciones"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Segunda columna -->
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="border: hidden"></th>
                                                <th style="border: hidden">Funcionamiento de dispositivos</th>
                                                <th style="border: hidden">Si</th>
                                                <th style="border: hidden">No</th>
                                                <th style="border: hidden">Observaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 9 - Lector de huellas -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">9.</td>
                                                <td style="border: hidden">Lector de huellas</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="lector_de_huellas" id="lector_de_huellas" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="lector_de_huellas" id="lector_de_huellas" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="lector_de_huellas_observaciones" id="lector_de_huellas_observaciones"></td>
                                            </tr>
                                            <!-- 10 - Pantalla -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">10.</td>
                                                <td style="border: hidden">Pantalla</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="pantalla" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="pantalla" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="pantalla_observaciones" id="pantalla_observaciones"></td>
                                            </tr>
                                            <!-- 11 - Puertos USB -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">11.</td>
                                                <td style="border: hidden">Puertos USB</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="puertos_USB" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="puertos_USB" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="puertos_USB_observaciones" id="puertos_USB_observaciones"></td>
                                            </tr>
                                            <!-- 12 - Puerto VGA (monitor) -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">12.</td>
                                                <td style="border: hidden">Puerto VGA (monitor)</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="puerto_VGA" value="Si">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="puerto_VGA" value="no">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="puerto_VGA_observaciones" id="puerto_VGA_observaciones"></td>
                                            </tr>
                                            <!-- 13 - Puerto HDMI -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">13.</td>
                                                <td style="border: hidden">Puerto HDMI</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="puerto_HDMI" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="puerto_HDMI" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="puerto_HDMI_observaciones" id="puerto_HDMI_observaciones"></td>
                                            </tr>
                                            <!-- 14 - Puerto audífonos -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">14.</td>
                                                <td style="border: hidden">Puerto audífonos</td>
                                                <!-- Si -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono" value="1">
                                                </td>
                                                <!-- No -->
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono" value="0">
                                                </td>
                                                <!-- Observaciones -->
                                                <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                            </tr>
                                            <!-- 15 - Batería -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">15.</td>
                                                <td style="border: hidden">Batería</td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="bateria" value="1">
                                                </td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="bateria" value="0">
                                                </td>
                                                <td><label for="time">Duracion:</label>
                                                    <!-- <input type="time" name="bateria_observaciones" id="bateria_observaciones" pattern="[0-9]{2}:[0-9]{2}"> -->
                                                    <!-- <input type="week" name="week" min="2018-W1" max="2018-W52"> -->

                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="border: hidden">HH</th>
                                                                <th style="border: hidden">MM</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- 16 - Adaptador de corriente -->
                                                            <tr style="border: hidden">
                                                                <td style="border: hidden">
                                                                    <input type="number" name="bateria_horas" id="bateria_horas"  style="width:90px" placeholder="00" max="24" min="0">
                                                                </td>
                                                                <td style="border: hidden">
                                                                        <input type="number" name="bateria_minutos" id="bateria_minutos" style="width:90px" placeholder="00" max="59" min="0">
                                                                </td>



                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- 16 - Adaptador de corriente -->
                                            <tr style="border: hidden">
                                                <td style="border: hidden">16.</td>
                                                <td style="border: hidden">Adaptador de corriente</td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono" value="Si">
                                                </td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono" value="no">
                                                </td>
                                                <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Otros -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Otros</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>encuesta/store" method="POST" enctype="multipart/form-data" onsubmit="return confirmation()">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="border: hidden"></th>
                                                        <th style="border: hidden">Otros</th>
                                                        <th style="border: hidden">Bueno</th>
                                                        <th style="border: hidden">Malo</th>
                                                        <th style="border: hidden">Regular</th>
                                                        <th style="border: hidden">Observaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="border: hidden">
                                                        <td style="border: hidden">1.</td>
                                                        <td style="border: hidden">Estado físico del equipo</td>
                                                        <td style="border: hidden">
                                                            <input type="radio" name="microfono" value="0">
                                                        </td>
                                                        <td style="border: hidden">
                                                            <input type="radio" name="microfono" value="1">
                                                        </td>
                                                        <td style="border: hidden">
                                                            <input type="radio" name="microfono" value="2">
                                                        </td>
                                                        <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                                    </tr>
                                                    <tr style="border: hidden">
                                                        <td style="border: hidden">2.</td>
                                                        <td style="border: hidden">Rendimiento del equipo</td>
                                                        <td style="border: hidden">
                                                            <input type="radio" name="microfono" value="Si">
                                                        </td>
                                                        <td style="border: hidden">
                                                            <input type="radio" name="microfono" value="no">
                                                        </td>
                                                        <td style="border: hidden">
                                                            <input type="radio" name="microfono" value="no">
                                                        </td>
                                                        <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comunicaciones</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="border: hidden"></th>
                                                    <th style="border: hidden">Comunicaciones</th>
                                                    <th style="border: hidden">Proveedor</th>
                                                    <th style="border: hidden">Velocidad</th>
                                                    <th style="border: hidden">Observaciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="border: hidden">
                                                    <td style="border: hidden">1.</td>
                                                    <td style="border: hidden">Servicio(s) de Internet instalado(s)</td>
                                                    <td style="border: hidden">
                                                        <input type="text" name="microfono">
                                                    </td>
                                                    <td style="border: hidden">
                                                        <input type="number" name="microfono">
                                                    </td>
                                                    <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Requerimientos Adicionales</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- /.card-header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="border: hidden"></th>
                                                <th style="border: hidden">Requerimientos Adicionales</th>
                                                <th style="border: hidden">Si</th>
                                                <th style="border: hidden">No</th>
                                                <th style="border: hidden">Descripción</th>
                                                <th style="border: hidden">Justificación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="border: hidden">
                                                <td style="border: hidden">1.</td>
                                                <td style="border: hidden">Requiere de algún programa o software en específico para desarrollar su trabajo</td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono">
                                                </td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono">
                                                </td>
                                                <td style="border: hidden"><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>

                                                <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                            </tr>

                                            <tr style="border: hidden">
                                                <td style="border: hidden">2.</td>
                                                <td style="border: hidden">Requiere de algún equipo o dispositivo en específico para desarrollar su trabajo</td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono">
                                                </td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono">
                                                </td>
                                                <td style="border: hidden"><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>

                                                <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                            </tr>
                                            <tr style="border: hidden">
                                                <td style="border: hidden">3.</td>
                                                <td style="border: hidden">Requiere de algún servicio en específico para desarrollar su trabajo</td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono">
                                                </td>
                                                <td style="border: hidden">
                                                    <input type="radio" name="microfono">
                                                </td>
                                                <td style="border: hidden"><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>

                                                <td><input type="text" name="microfono_observaciones" id="microfono_observaciones"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-1 float-right">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </form>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2022 <a href="https://gdsnet.mx/">Grupo Digital Systems</a>.</strong> All rights reserved.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="<?php echo base_url(); ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="<?php echo base_url(); ?>assets/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
</body>

</html>