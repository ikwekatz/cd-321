
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>OJAS | Home</title>
    <?php
define('ROOT',__DIR__);
    define ('cssP', "/php/project/bootstrap/css/" );
    define ('page', "/php/project/pages/");
    define ('page1', "/php/project/pages/private/session.php");
    define('includes', "\php\project\includes");
    define('Image', '/php/project/img/');
    define('index', '/php/project/index.php');
    define('jssrc', '/php/project/bootstrap/js/');
    define('vendor', '/php/project/vendor/');
    define('admin', '/php/project/admin/');
    $includes="C:/xampp1/htdocs/php/project/includes/connection.php";
    include $includes;
    $session="C:/xampp1/htdocs/php/project/includes/session.php";
    include $session;
    confirm_logged_in();
    admin_conf();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>Profile-Edit-Form-1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>Profile-Edit-Form.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo vendor; ?>datatables/dataTable.css">
    <link rel="icon" href="<?php echo Image;?>favico.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!--External css file link-->
    <script type="text/javascript" src="<?php echo jssrc;?>main.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>Profile-Edit-Form.js"></script>
    <!-- custom javascript -->
</head>
<body class="bg-light">

    <header class="section-header d-flex flex-column">
        <section class="header-main border-bottom col-12 bg-primary">
            <div class="row align-items-center">
                <div class="row align-items-centerm                    <div class="col-lg-2 col-0">
                        <a href="<?php echo admin;?>adashboard.php" class="brand-wrap">
                            <img class="logo " width="150px" src="<?php echo Image.'favico.png';?>">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class=" row">
                        <div class="col-lg-auto col-0 text-white">
                            <h2>Online Job Application</h2>
                        </div>
                        <div class="text text-white">
                            <div class="col-lg-auto">
                                <h2>Welcome Admin</h2>
                            </div>
                        </div>
                        <div class="col-lg-auto  ml-auto">
                                <a class="text text-white" href="<?php echo page; ?>logout.php"><h2>Logout</h2></a>
                            </div>
                    </div>
                </div>
        </section>