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
    define('includes', "/php/project/includes/");
    define('Image', '/php/project/img/');
    define('index', '/php/project/index.php');
    define('jssrc', '/php/project/bootstrap/js/');
    @include('../includes/connection.php');
    @include('../includes/session.php');

?>
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>Profile-Edit-Form-1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP;?>Profile-Edit-Form.css">
    <link rel="icon" href="<?php echo Image;?>favico.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--External css file link-->
    <script type="text/javascript" src="<?php echo jssrc;?>main.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>Profile-Edit-Form.js"></script>
    <!-- custom javascript -->

    <script type="text/javascript">
    /// some script

    // jquery ready start
    $(document).ready(function() {
        // jQuery code

        /////////////////  items slider. /plugins/slickslider/
        if ($('.slider-items-slick').length > 0) { // check if element exists
            $('.slider-items-slick').slick({
                infinite: true,
                swipeToSlide: true,
                slidesToShow: 4,
                dots: false,
                slidesToScroll: 2,
                prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        } // end if
    });
    // jquery end
    </script>

</head>

<body>
    <header class="section-header d-flex flex-column">
        <section class="header-main border-bottom col-12 bg-primary">
            <div class="row align-items-center">
                <?php
                    if(isset($_SESSION['email'])){
                ?>
                <div class="row align-items-center">
                    <div class="col-lg-2 col-0">
                        <a href="<?php echo page;?>dashboard.php" class="brand-wrap">
                            <img class="logo " width="150px" src="<?php echo Image.'favico.png';?>">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class=" row">
                        <div class="col-lg-auto col-0 text-white">
                            <h2>Online Job Application</h2>
                        </div>
                        <div class="text text-white">
                            <div class="col-lg-auto">
                                <h2>Welcome <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-auto  ml-auto">
                                <a class="text text-white" href="<?php echo page; ?>logout.php"><h2>Logout</h2></a>
                            </div>
                    </div>
                </div>
        </section>
        <?php
}else{
    ?>
        <section class="header-main border-bottom col-12 bg-primary">
            <div class="row align-items-center">
                <div class="col-lg-2 col-2">
                    <a href="<?php echo index; ?>" class="brand-wrap">
                        <img class="logo " width="100px" src="<?php echo Image.'favico.png'; ?>">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-9 col-9 col-sm-10 row">
                    <div class="container-fluid col-8">
                        <div class="card1">
                            <div class=" text-white">
                                <h1>Online Job Application System</h1>
                            </div>
                        </div>
                        <!--End of Nav div-->
                    </div> <!-- col.// -->
                    <div class="col-lg-3 col-sm-3 col-3">
                        <div class="widgets-wrap float-lg-right">
                            <div class="widget-header icontext">
                                <div>
                                    <a href="#" class="icon text-white icon-lg rounded-circle border"> <i
                                            class=" fa fa-user"></i></a>
                                </div>
                                <div class="text text-white">
                                    <div class="text text-white">
                                        <a class="text text-white" href="<?php echo page; ?>login.php">Login</a> |
                                        <a class="text text-white" href="<?php echo page; ?>register.php"> Register</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
            <?php
    }
    ?>
            </div>
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->