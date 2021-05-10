<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>World English for kids 1</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/css/modules.css">  
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed" style="background-image: url('../../assets/img/fondo_body.jpg');" >
<!-- video background -->


<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-transparent" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/manoholograma.gif"  style="width: 5cm; height: 2cm; ">
        </a>
      </li>
      <li class="nav-item"><h1><?php echo 'LESSON '.$_GET['lesson'].' - ACTIVITY '.$_GET['actividad']; ?></h1></li>
      <li class="nav-item"><img class="img-fluid" src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/bienvenidos mundo extremo.gif" alt="">            </li>
      <li class="nav-item">
      <a href="actividad_<?php echo $_GET['lesson']; ?>.html"><img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/logo2.gif"></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-transparent">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/logo.PNG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mundo Educativo</span>
    </a>

    <!-- Sidebar -->
    

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <div class="sidebar">      
               
                <div class="src_1">
                  <img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/mano.gif" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
                 </div>
                 <div class="src_2">
                   <img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/diccionario.jpg" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
                 </div>
                 <div class="src_3">
                   <img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/musica.gif" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
                 </div>
                 
              </div>
            </a>
           
          </li>
            </ul>         
      </nav>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-transparent">
    <!-- Content Header (Page header) -->
    <section class="content-header">      
    </section>
    <section class="content" >
      <div class="container-fluid">        
        <div class="row">
          <div class="col-xl-12">
          <iframe src="../scorm_t3/l<?php echo $_GET['lesson'].'/'.$_GET['lesson'].'_'.$_GET['actividad'].'/index.html'; ?>" class="embed-responsive-item" style="width: 900px;height:550px;"></iframe>
          </div>        
        </div> 
      </div>
    </section> 
     <!--  <footer class="main-footer" style="background-color : transparent">
        <div id="mySidepanel" class="sidepanel">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="<?php //echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/submarinosqui1.gif " class="img-thumbnail img-fluid" style="width: 60px; height: 60px;" alt=""></a>
        <div class="row">
          <div class="src_2">
            <img src="<?php //echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/3583687p.jpg" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
          </div>
          <div class="src_3">
            <img src="<?php// echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/Underwater_world_with_funny_fish_background.jpg" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
          </div>
          <div class="src_4">
            <img src="<?php// echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/4211139.jpg" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
          </div>
        </div>
      </div> -->
        <h2>.</h2>
        <h2>.</h2>
        <button class="openbtn" onclick="openNav()">
          <img src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/img/submarinosqui1.gif" class="img-thumbnail img-fluid" style="width: 50px; height: 50px; ">
        </button>  
      </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>  
  <!-- /.control-sidebar -->
</div>
</div>
<!-- ./wrapper -->
      <!-- jQuery -->
      <script src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo dirname($_SERVER['REQUEST_URI'],3); ?>/assets/dist/js/demo.js"></script>
        <script>
        function openNav() {
          document.getElementById("mySidepanel").style.width = "330px";
        }
        
        function closeNav() {
          document.getElementById("mySidepanel").style.width = "0px";
        }
        </script> 
        <script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>
</body>
</html>