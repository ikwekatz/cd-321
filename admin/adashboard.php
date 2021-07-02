<?php
include('./pages/header.php');
include('./pages/sidebar.php');
#confir_login(); confirm admin login
?>
 <div class="topbar-divider d-non255e d-sm-block"></div>

 <div class="card-body ">
     <div class="container bg-light">
        <div class="panel-body">
            <div class="panel-group" id="accordion">
                <p align='justify' class="text text-success">You have successfully Online Job Apllication System as Administrator. You currently have
                access to the following sections</p>
                </br>
                <ul class="text text-dark">
                    <li>View Jobs</li>
                    <li>Add Jobs</li>
                    <li>View User</li>
                    <li>Add User</li>
                    <li>View Applicants</li>
                    <li>User Account management</li>
                 </ul>
                 </br></br>
                <p class="text text-dark">Please select appropriate action to continue...!</p>
                </br></br>
        </div>
    </div>
    </div>
</div>
<?php 
include('../includes/footer.php');

?>