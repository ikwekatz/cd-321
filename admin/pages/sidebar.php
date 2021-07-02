
    <style type="text/css">
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
        cursor: pointer;
    }

    #text {
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    </style>
   

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href='<?php echo admin;?>adashboard.php'" id="clim2">
                    <i class="fa fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Tables Buttons -->
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="location.href='<?php echo admin;?>pages/job.php'" id="clim3">
                    <i class="fa fa-line-chart"></i>
                    <span>Job Category</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="location.href='<?php echo admin;?>pages/appliview.php'" id="clim4">
                    <i class="fa fa-user-plus"></i>
                    <span>Applicants</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="location.href='<?php echo admin;?>pages/user.php'" id="clim5">

                    <i class="fa fa-user"></i>
                    <span>Users</span></a>
            </li>

                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="location.href='<?php echo admin;?>pages/account.php'" id="clim8">
                    <i class="fa fa-cog"></i>
                    <span>User Account Management</span></a>
            </li>

           <hr class="sidebar-divider d-none d-md-block">

        </ul>