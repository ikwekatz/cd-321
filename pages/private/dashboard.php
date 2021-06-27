<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>OJAS | DASHBOARD</title>
    <?php
  define('ROOT',__DIR__);
      define ('cssP', "/php/project/bootstrap/css/" );
      define ('page', "/php/project/pages/");
      define ('page1', "/php/project/pages/");
      define('includes', "/php/project/includes/");
      define('Image', '/php/project/img/');
      define('index', '/php/project/index.php');
      define('jssrc', '/php/project/bootstrap/js/');
      include('../../includes/session.php');
      confirm_logged_in();
  ?>
    <link rel="stylesheet" type="text/css" href="<?php echo cssP ;?>main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo cssP  ;?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<<?php echo cssP;?>fontawesome-all.min.css">
    <link rel="icon" href="<?php echo Image;?>favico.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--External css file link-->
    <script type="text/javascript" src="<?php echo jssrc;?>main.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo jssrc;?>bootstrap.min.js"></script>
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
<div>

    <body>
        <header class="section-header">
            <section class="header-main border-bottom col-12 bg-primary">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-0">
                        <a href="<?php echo $pth;?>" class="brand-wrap">
                            <img class="logo " width="150px" src="<?php echo Image.'favico.png';?>">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class=" row">
                        <div class="container">
                            <div class=" text-white">
                                <h1>Online Job Application</h1>
                            </div>
                        </div>
                        <!--End of Nav div-->
                    </div> <!-- col.// -->
                    <div class="widget-header icontext">
                        <div class="text text-white">
                            <div class="col">
                                <p class="col-sm-6">
                                <h3>Welcome <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></h3>

                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- widgets-wrap.// -->
</div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->
</header> <!-- section-header.// -->

</body>


<div class="row">
    <div class="centbox ">
        <div class="block">
            <h3>Programmer Post</h3>
            <img src="<?php echo Image;?>programmer.jpg" alt="programmer" width="95%" height="250px"> <br><br>
            <a href="#"> <button class="btn btn-primary"> Aply here</button> </a>
        </div>
        <div class="block">
            <h3>Graphics Design Post</h3>
            <img src="<?php echo Image;?>graphics.jpg" alt="graphics" width="95%" height="250px"> <br><br>
            <a href="#"> <button class="btn btn-primary"> Aply here</button> </a>
        </div>
        <div class="block">
            <h3>Network Administration Post</h3>
            <img src="<?php echo Image;?>network.jpg" alt="network" width="95%" height="250px">
            <br><br>
            <div class="btn_c">
                <a href="#"> <button class="btn btn-primary"> Aply here</button> </a>
            </div>
        </div>
        <div class="clr"></div>
        <div id="main-block">
            <h3>Video Editor Post</h3>
            <img src="<?php echo Image;?>video.jpg" alt="Database" width="90%" height="250px">
            <br><br>
            <div class="btn_c">
                <a href="#"> <button class="btn btn-primary"> Aply here</button> </a>
            </div>
        </div>
        <div id="side-bar">
            <h4 class="text-dark">Database Administration Post</h4>
            <img src="<?php echo Image;?>database.jpg" alt="Database" width="95%" height="250px">
            <br><br>
            <div class="btn_c">
                <a href="#"> <button class="btn btn-primary"> Aply here</button> </a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer -->
<div class="row">
    <!--Grid column-->
    <div class="col-auto mb-4 mb-md-0">
        <p class="pt-2">
            <strong></strong>
        </p>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-5 col-12 mb-4 mb-md-0">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form5Example2" placeholder="Enter email to subscribe news and update"
                class="form-control" />
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-auto mb-4 mb-md-0">
        <!-- Submit button -->
        <button type="submit" class="btn btn-secondary mb-4">
            Subscribe
        </button>
        <button type="submit" class="btn btn-secondary mb-4">
            <a href="<?php echo page;?>public/logout.php">Logout</a>
        </button>
    </div>
    <!--Grid column-->
</div>
<!--Grid row-->
</form>
</div>
</div>
<!--End of card body div-->
<?php
include '../../includes/footer.php';
?>
</body>