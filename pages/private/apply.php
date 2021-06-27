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
      @include('../../includes/session.php');
      @include('../../includes/connection.php');
      confirm_logged_in();
  ?>
  <link rel="stylesheet" type="text/css" href="<?php echo cssP ;?>main.css">
  <link rel="stylesheet" type="text/css" href="href="<?php echo cssP ;?>editp.css">
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
              responsive: [
                  {
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
  <body >
  <header  class="section-header">
  <section class="header-main border-bottom col-12 bg-primary" >
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
                  <p class="col-sm-6"><h3>Welcome <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></h3></p>
            </div>
            <div class="col">

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
  <?php
  $job="";
  $jobid="";
  $job2="";
  ?>

<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6><a href="<?php echo page;?>private/dashboard.php">Back to home</a></h6>
                    </div>
                    <h6 class="text-right">Apply Job Post</h6>
                </div>
                <form class=' form form-inline1' action="#" method="POST" enctype="multipart/form-data">
                <div class="row mt-2">
                  <label for="fname" class="col-form-label">First Name</label>
                    <div class="col-md-3"><input type="text" class="form-control" placeholder="first name" id="fname" value="<?php echo $_SESSION['fname']; ?>" disabled></div>
                      <label for="lname" class="col-form-label">Last Name</label>
                  <div class="col-md-3"><input type="text" class="form-control" id="lname"  value="<?php echo $_SESSION['lname']; ?>"  disabled></div>
                    <label for="email" class="col-form-label">Email</label>
                  <div class="col-md-3"><input type="text" name="email" id="email"  class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" disabled></div>
                </div>
                <div class="row mt-3">
                  <label for="gender" class="col-form-label">Gender</label>
                  <div class="col-md-4"><input type="text" class="form-control" id="gender"  value="<?php echo $_SESSION['gender']; ?>" placeholder="Phone number" disabled></div>
                  <label for="country" class="col-form-label">Country:</label>
                    <div class="col-md-4"><input type="text" class="form-control" id="country"  placeholder="country" value="<?php echo $_SESSION['country']; ?>" disabled></div>
</div>
                <div class="row mt-3">
                      <div class="col-md-6">
                        <label for="phone" class="col-form-label">Phone</label>
                        <div class="col-md-4"><input type="text" class="form-control" id="phone"  value="<?php echo $_SESSION['phone']; ?>" placeholder="Phone number" disabled></div>
                    </div>
                    <div class="col-md-4">
                    <?php
                  $stmt=$conn->prepare("SELECT * FROM jobs ");
                  if ($stmt->execute()){
                    $i=0;
                     $job2 = " <select class='form-control col-sm-11' name='jobs' required>";
                    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                      $job=$row['jobName'];
                        $jobid=$row['jobid'];
                        if ($i==0){
                            $job2 .= "<option value='" . $jobid . "' selected>" . $job . "</option>";
                            $i++;
                        }
                        else{
                            $job2 .= "<option value='" . $jobid . "'>" . $job . "</option>";
                        }



                            }
                   $job2 .= "</select></div>";
                  }


                     echo $job2;
                     ?>
                    </div>
                    <div class="col-md-6">
                      <label for="phone" class="col-form-label">Phone</label>
                      <div class="col-md-4"><input type="text" class="form-control" id="phone"  value="<?php echo $_SESSION['phone']; ?>" placeholder="Phone number" disabled></div>
                  </div>
                  </div>


                          <div class="custom-file">
                              <label for="phone" class="col-form-label">Certificates</label>
                              <input type="file" class="custom-file-input" name="fileID" id="customFile" multiple="multiple" required
                                  accept=".pdf">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        </div>
                </div>
              </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Apply</button></div>
            </div>
          </form>
        </div>
    </div>
</div>
<br>
<br>
<br>

<script>
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("customFile").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
});
</script>


<?php include('../../includes/footer.php') ?>
