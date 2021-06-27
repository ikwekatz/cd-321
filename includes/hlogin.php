<!DOCTYPE html>
<html>

<head>
    <title>OJA || HOME </title>

  <?php
  define('ROOT',__DIR__);
    define ('cssP', "/php/project/bootstrap/css/" );
    define ('page', "/php/project/pages/");
    define('includes', "/php/project/includes/");
    define('Image', '/php/project/img/');
    define('index', '/php/project/index.php');
    define('jssrc', '/php/project/bootstrap/js/')
   ?>
    <link rel="stylesheet" type="text/css" href="<?php echo cssP ;?>main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP  ;?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<<?php echo cssP;?>fontawesome-all.min.css">
    <link rel="icon" href="<?php echo Image;?>favico.ico">
    <!--External css file link-->
    <script type="text/javascript" src="<?php echo jssrc;?>main.js"></script>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvatica sans-serif;
        }
    </style>
    <!--Internal css declaration-->

</head>
<body>
  <div class="container-fluid">
    <div class="card">
      <div class="box-1 text-dark">
        <h1>Online Job Application System</h1>
      </div>
    </div>
    <div class="card-body">
    <nav class="navbar navbar-light bg-primary navbar-expand-lg bg-primary">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"></a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link text-white" href="<?php echo index ?>"><h2>HOME </h2><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><h2>Login</h2></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#"><h2>REGISTER</h2></a>
        </li>
      </ul>
    </nav>
  </div> <!--End of Nav div-->
