<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>resources/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url()?>resources/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<script src="<?= base_url()?>resources/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>resources/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>resources/assets/js/material.min.js" type="text/javascript"></script>

	
	<title>Asesor pedagógico</title>
	
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url()?>resources/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>resources/assets/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url()?>resources/assets/css/material-dashboard.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>resources/assets/css/modal.css">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url()?>resources/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <?php $user = $this->session->userdata('logged_in');?>
</head>
<body>
<div class="wrapper">

        <div class="sidebar" data-color="purple" data-image="<?= base_url()?>resourcess/assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->

            <div class="logo">
                <a href="#" class="simple-text">
                    <img src="https://www.blumenreviews.com/images/universities/logo/logo-inacap.png" style="width: 200px; height: 50px;">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                <?php if ((in_array(1, $user['permisos'])) ) { ?>
                        <li>
                        <a href="#">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url()?>/Asesor_Controller/verAlumnos">
                            <i class="material-icons">face</i>
                            <p>Ver Alumnos</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url()?>/Asesor_Controller/verProfesor">
                        <i class="fa fa-user-secret"></i>
                            <p>Ver Profesores</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url()?>/Asesor_Controller/verTutorias">
                            <i class="material-icons">library_books</i>
                            <p>Tutorías</p>
                        </a>
                    </li>
                     <li>
                        <a href="<?=site_url()?>/Asesor_Controller/Reforsamientos">
                            <i class="material-icons">assignment_turned_in</i>
                            <p>Reforzamientos</p>
                        </a>
                    </li>
                   <li>
                        <a href="<?=site_url()?>/Asesor_Controller/Ayudantia">
                            <i class="material-icons">book</i>
                            <p>Ayudantía</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url()?>/Asesor_Controller/Notificaciones">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url()?>/Asesor_Controller/Importar">
                            <i class="material-icons">file_upload</i>
                            <p>Importar</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url()?>/Asesor_Controller/Exportar">
                            <i class="material-icons">file_download</i>
                            <p>Exportar</p>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ((in_array(2, $user['permisos'])) ) { ?>
                        <li>
                        <a href="">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">face</i>
                            <p>Ver Alumnos</p>
                        </a>
                    </li>
                    <li>
                        <a href="buscarprofesores.html">
                        <i class="fa fa-user-secret"></i>
                            <p>Ver Profesores</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Tutorías</p>
                        </a>
                    </li>
                     <li>
                        <a href="#">
                            <i class="material-icons">assignment_turned_in</i>
                            <p>Reforzamientos</p>
                        </a>
                    </li>
                   <li>
                        <a href="#">
                            <i class="material-icons">book</i>
                            <p>Ayudantía</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">file_upload</i>
                            <p>Importar</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">file_download</i>
                            <p>Exportar</p>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ((in_array(3, $user['permisos'])) ) { ?>
                         <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="material-icons">person</i>
                            <p>Mi Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="material-icons">date_range</i>                            
                        <p>Mi Horario</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Mis Ramos</p>
                        </a>
                    </li>
                   <li>
                   <a href="#Modalreforzamientos" id="openBtn" data-toggle="modal">
                        
                            <i class="material-icons">assignment</i>
                            <p>Solicitar reforzamientos</p></a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notificaciones</p>

                        </a>
                    </li>
                    <?php } ?>
                    <?php if ((in_array(4, $user['permisos'])) ) { ?>
                         <li class="active">
                        <a href="<?=site_url('Profesor_Controller/Index')?>">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Profesor_Controller/perfil')?>">
                            <i class="material-icons">person</i>
                            <p>Mi Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Profesor_Controller/horario')?>">
                            <i class="material-icons">date_range</i>                            
                        <p>Mi Horario</p>
                        </a>
                    </li>
                   <li>
                   <a href="#Modalreforzamientos" id="openBtn" data-toggle="modal">
                        
                            <i class="material-icons">assignment</i>
                            <p>Solicitar reforzamientos</p></a>
                    </li>
                   
                    <?php } ?>
                    <?php if ((in_array(5, $user['permisos'])) ) { ?>
                        <li>
                        <a href="#">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="material-icons">person</i>
                            <p>Mi Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a href="misramos.html">
                            <i class="material-icons">library_books</i>
                            <p>Mis Ramos</p>
                        </a>
                    </li>
                      <li>
                        <a href="historial.html">
                            <i class="material-icons">library_books</i>
                            <p>Historial de Tutorías</p>
                        </a>
                    </li>
                   
                    <li>
                        <a href="#">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons"> medium power_settings_new</i>
                                   <p class="hidden-lg hidden-md">Perfil</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=site_url('Login_Controller/logout')?>">Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal" id="Modalreforzamientos">
                                <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                          <h3 class="modal-title">Pedir Reforzamiento</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Dia</label>
                                                    <select>
                                                        <option value="Lunes">Lunes</option>
                                                        <option value="Martes">Martes</option>
                                                        <option value="Miercoles">Miercoles</option>
                                                        <option value="Jueves">Jueves</option>
                                                        <option value="Viernes">Viernes</option>
                                                        <option value="Sabado">Sabado</option>
                                                        

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Asignatura</label>
                                                    <input type="email" class="form-control" >
                                                </div>
                                            </div>
                                              <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fecha</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        </form></div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>  
                                          <button type="button" class="btn btn-primary">Solicitar</button>
                                        </div>
                                                

                                      </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                  </div><!-- /.modal -->

        <!--aqui termina la wea -->
        <div class="row">
  <div class="col-xs-12">
  <?php echo $content_for_layout; ?>
  </div>
</div>

                    </div>
            </body>
          
            </html>