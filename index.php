<?php
  include("./includes/header.php");
      if (isset($_POST['programer'])) {
        $_SESSION['job']="Programmer Post";
    }elseif(isset($_POST['graphics'])){
        $_SESSION['job']="Graphics Design Post";
    }
    elseif(isset($_POST['network'])){
        $_SESSION['job']="Network Administration Post";
    }elseif(isset($_POST['video'])){
        $_SESSION['job']="Video Editor Post";
    }
    elseif(isset($_POST['database'])){
        $_SESSION['job']="Database Administration Post";
    }else{
        $_SESSION['job']="";
    }
  ?>
<body>

<div class="row">
        <div class="centbox ">
            <div class="block">
                <h3>Programmer Post</h3>
                <img src="<?php echo Image;?>programmer.jpg" alt="programmer" width="95%" height="250px"> <br><br>
                <form class="needs-validation" name="rform" method="POST" action="<?php echo page;?>apply.php">
                    <input type="submit" name="programer" class="btn btn-primary" value="Aply here">
                </form>
            </div>
            <div class="block">
                <h3>Graphics Design Post</h3>
                <img src="<?php echo Image;?>graphics.jpg" alt="graphics" width="95%" height="250px"> <br><br>
                <form class="needs-validation" name="rform" method="POST" action="<?php echo page;?>apply.php">
                    <input type="submit" name="graphics" class="btn btn-primary" value="Aply here">
                </form>
            </div>
            <div class="block">
                <h3>Network Administration Post</h3>
                <img src="<?php echo Image;?>network.jpg" alt="network" width="95%" height="250px">
                <br><br>
                <form class="needs-validation" name="rform" method="POST" action="<?php echo page;?>apply.php">
                    <input type="submit" name="network" class="btn btn-primary" value="Aply here">
                </form>
            </div>
            <div class="clr"></div>
            <div id="main-block">
                <h3>Video Editor Post</h3>
                <img src="<?php echo Image;?>video.jpg" alt="Database" width="90%" height="250px">
                <br><br>
                <form class="needs-validation" name="rform" method="POST" action="<?php echo page;?>apply.php">
                    <input type="submit" name="video" class="btn btn-primary" value="Aply here">
                </form>
            </div>
            <div id="side-bar">
                <h4 class="text-dark">Database Administration Post</h4>
                <img src="<?php echo Image;?>database.jpg" alt="Database" width="95%" height="250px">
                <br><br>
                <form class="needs-validation" name="rform" method="POST" action="<?php echo page;?>apply.php">
                    <input type="submit" name="database" class="btn btn-primary" value="Aply here">
                </form>
            </div>
        </div>
    </div>
    <section class="home-newsletter">
        <form method="POST" action="<?php echo page;?>subscribe.php">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="single">
                            <h2>Subscribe to our Newsletter</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" name="sube" required
                                    placeholder="Enter your email">
                                <span class="">
                                    <button class="btn btn-primary" name="subscribe" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
  </div>
<?php
include('./includes/footer.php')
?>
<!--End of card body div-->
</body>
</html>
