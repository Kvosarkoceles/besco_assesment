<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDSnet</title>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
    <script src="http://192.168.1.136/actualizacion_datos_CFDI_4_0/assets/dist/js/menu.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url(); ?>assets/index3.html" class="nav-link">Inicio</a>
                </li>
            </ul>

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
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url(); ?>assets/index3.html" class="brand-link">
                <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">GDSnet</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Actualización de Datos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                                <li class="breadcrumb-item active">Actualización</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Datos Fiscales</h3>
                        </div>
                        <form action="<?php echo base_url(); ?>encuesta/store" method="POST" enctype="multipart/form-data">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Razon Social -->
                                        <div class="form-group">
                                            <label for="RFC">Razón Social</label>
                                            <input class="form-control" type="text" name="razon" id="razon" required>
                                        </div>
                                        <!-- Regimen fiscal -->
                                        <div class="form-group">
                                            <label for="RFC">Régimen Fiscal</label>
                                            <div class="select2-purple">
                                                <select class="select2" data-placeholder="Seleccione un Regimen" data-dropdown-css-class="select2-purple" style="width: 100%;" name="regimen" id="regimen" required>
                                                    <option value=""> Seleccione un Regimen Fiscal</option>
                                                    <option value="601">General de Ley Personas Morales</option>
                                                    <option value="603">Personas Morales con Fines no Lucrativos</option>
                                                    <option value="605">Sueldos y Salarios e Ingresos Asimilados a Salarios</option>
                                                    <option value="606">Arrendamiento</option>
                                                    <option value="607">Régimen de Enajenación o Adquisición de Bienes</option>
                                                    <option value="608">Demás ingresos</option>
                                                    <option value="610">Residentes en el Extranjero sin Establecimiento Permanente en México</option>
                                                    <option value="611">Ingresos por Dividendos (socios y accionistas)</option>
                                                    <option value="612">Personas Físicas con Actividades Empresariales y Profesionales</option>
                                                    <option value="614">Ingresos por intereses</option>
                                                    <option value="615">Régimen de los ingresos por obtención de premios</option>
                                                    <option value="616">Sin obligaciones fiscales</option>
                                                    <option value="620">Sociedades Cooperativas de Producción que optan por diferir sus ingresos</option>
                                                    <option value="621">Incorporación Fiscal</option>
                                                    <option value="622">Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras</option>
                                                    <option value="623">Opcional para Grupos de Sociedades</option>
                                                    <option value="624">Coordinados</option>
                                                    <option value="625">Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas</option>
                                                    <option value="626">Régimen Simplificado de Confianza</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Forma de pago sat -->
                                        <div class="form-group">
                                            <label for="pago_sat"> Forma de pago SAT</label>
                                            <div class="select2-purple">
                                                <select class="select2" name="pago_sat" id="pago_sat" data-placeholder="Seleccione un Regimen" data-dropdown-css-class="select2-purple" style="width: 100%;" required>
                                                    <option value=""> Seleccione una Forma de Pago SAT</option>
                                                    <option value="1">Efectivo</option>
                                                    <option value="2">Cheque nominativo</option>
                                                    <option value="3">Transferencia electrónica de fondos</option>
                                                    <option value="4">Tarjeta de crédito</option>
                                                    <option value="5">Monedero electrónico</option>
                                                    <option value="6">Dinero electrónico</option>
                                                    <option value="8">Vales de despensa</option>
                                                    <option value="12">Dación en pago</option>
                                                    <option value="13">Pago por subrogación</option>
                                                    <option value="14">Pago por consignación</option>
                                                    <option value="15">Condonación</option>
                                                    <option value="17">Compensación</option>
                                                    <option value="23">Novación</option>
                                                    <option value="24">Confusión</option>
                                                    <option value="25">Remisión de deuda</option>
                                                    <option value="26">Prescripción o caducidad</option>
                                                    <option value="27">A satisfacción del acreedor</option>
                                                    <option value="28">Tarjeta de débito</option>
                                                    <option value="29">Tarjeta de servicios</option>
                                                    <option value="30">Aplicación de anticipos</option>
                                                    <option value="31">Intermediario pagos</option>
                                                    <option value="99">Por definir</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- rfc -->
                                        <div class="form-group">
                                            <label for="RFC">RFC</label>
                                            <input class="form-control" type="text" name="rfc" id="rfc" required>
                                        </div>
                                        <!-- Codido Postal -->
                                        <div class="form-group">
                                            <label for="RFC">Código Postal</label>
                                            <INPUT class="form-control" placeholder="000000" type="text" name="cp" id="cp" SIZE=6 MAXLENGTH=6 minlength="6" required>
                                        </div>
                                        <!-- Uso de CFI -->
                                        <div class="form-group">
                                            <label for="uso_cfi"> Uso del CFI</label>
                                            <div class="select2-purple">
                                                <select class="select2" name="uso_cfi" id="uso_cfi" data-placeholder="Seleccione un Regimen" data-dropdown-css-class="select2-purple" style="width: 100%;" required>
                                                    <option value=""> Seleccione un Uso del CFI</option>
                                                    <option value="G01">Adquisición de mercancías.</option>
                                                    <option value="G02">Devoluciones, descuentos o bonificaciones.</option>
                                                    <option value="G03">Gastos en general.</option>
                                                    <option value="I01">Construcciones.</option>
                                                    <option value="I02">Mobiliario y equipo de oficina por inversiones.</option>
                                                    <option value="I03">Equipo de transporte.</option>
                                                    <option value="I04">Equipo de computo y accesorios.</option>
                                                    <option value="I05">Dados, troqueles, moldes, matrices y herramental.</option>
                                                    <option value="I06">Comunicaciones telefónicas.</option>
                                                    <option value="I07">Comunicaciones satelitales.</option>
                                                    <option value="I08">Otra maquinaria y equipo.</option>
                                                    <option value="D01">Honorarios médicos, dentales y gastos hospitalarios.</option>
                                                    <option value="D02">Gastos médicos por incapacidad o discapacidad.</option>
                                                    <option value="D03">Gastos funerales.</option>
                                                    <option value="D04">Donativos.</option>
                                                    <option value="D05">Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación).</option>
                                                    <option value="D06">Aportaciones voluntarias al SAR.</option>
                                                    <option value="D07">Primas por seguros de gastos médicos.</option>
                                                    <option value="D08">Gastos de transportación escolar obligatoria.</option>
                                                    <option value="D09">Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.</option>
                                                    <option value="D10">Pagos por servicios educativos (colegiaturas).</option>
                                                    <option value="S01">Sin efectos fiscales.</option>
                                                    <option value="CP01">Pagos</option>
                                                    <option value="CN01">Nómina</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Constancia de situación fiscal -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="RFC" style="font-size: small;"> Constancia de situación fiscal</label>
                                            <input type="file" name="mi_archivo1" id="mi_archivo1" class="form-control" value="fichero" accept="application/pdf" required>
                                        </div>
                                    </div>
                                    <!-- Opinión de Cumplimiento positiva al presente mes y año. -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="RFC" style="font-size: small;"> Opinión de Cumplimiento positiva al presente mes y año.</label>
                                            <input type="file" name="mi_archivo2" id="mi_archivo2" class="form-control" value="fichero" accept="application/pdf, .doc, .docx, .odf">
                                        </div>
                                    </div>
                                    <!-- Comprobante de domicilio no mayor a 3 meses -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="RFC" style="font-size: small;"> Comprobante de domicilio no mayor a 3 meses</label>
                                            <input type="file" name="mi_archivo3" id="mi_archivo3" class="form-control" value="fichero" accept="application/pdf, .doc, .docx, .odf">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <!-- <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="mt-2 float-right">
                                            <a class="btn btn-outline-secondary mt-5" href="<?php echo base_url(); ?>equipos/add">Agregar</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /.row -->

                                <div class="row mt-2 float-right">
                                    <div class="form-group">
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2022 <a href="http://sarkoceles.mx">Sarkoceles</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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