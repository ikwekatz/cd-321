<?php 
session_start();
//include('../includes/header.php');
$_SESSION['login']="loged";
$_SESSION['username']="mbwehe";

?>

<div class="top-bar animate-dropdown bg-primary">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">

                    <?php if(strlen($_SESSION['login']))
    {   ?>
                    <li class=""><a href="#" class="text-white"><i class="icon fa fa-user"></i>Welcome
                            -<?php echo htmlentities($_SESSION['username']);?></a></li>
                    <?php } ?>

                    <li><a href="my-account.php" class="text-white"><i class="icon fa fa-user"></i>My Account</a></li>
                    <li><a href="my-wishlist.php" class="text-white"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                    <li><a href="my-cart.php" class="text-white"><i class="icon fa fa-shopping-cart"></i>My Cart</a>
                    </li>
                    <?php if(strlen($_SESSION['login'])==0)
    {   ?>
                    <li><a href="login.php" class="text-white"><i class="icon fa fa-sign-in"></i>Login</a></li>
                    <?php }
else{ ?>

                    <li><a href="logout.php" class="text-white"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                    <?php } ?>
                </ul>
            </div><!-- /.cnt-account -->

            <div class="cnt-block">
                <ul class="list-unstyled list-inline">
                    <li class="dropdown dropdown-small">
                        <a href="track-orders.php" class="dropdown-toggle text-white"><span class="key">Track
                                Order</b></a>

                    </li>


                </ul>
            </div>

            <div class="clearfix"></div>
        </div><!-- /.header-top-inner -->
    </div><!-- /.container -->
</div><!-- /.header-top -->