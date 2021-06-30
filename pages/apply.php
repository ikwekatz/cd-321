<?php
  include("../includes/header.php");
    $_SESSION['job']="hi";
      confirm_logged_in();
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
<div class="container profile profile-view" id="profile">
    <form method="POST" action="<?php  echo page;?>application.php" enctype="multipart/form-data">
        <div class="form-row profile-row">
            <div class="col-md-4 relative"></div>
            <div class="col-md-8">
                <h1>Job Application Window</h1>
                <hr>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Firstname </label><input class="form-control"
                                value="<?php echo $_SESSION['fname']; ?>" type="text" name="firstname" disabled></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Lastname </label><input disabled class="form-control"
                                value="<?php echo $_SESSION['lname']; ?>" type="text" name="lastname"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Email </label><input class="form-control" type="email"
                                autocomplete="off" disabled value="<?php echo $_SESSION['email']; ?>" name="email">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Gender </label><input class="form-control" type="text"
                                name="gender" autocomplete="off" value="<?php echo $_SESSION['gender']; ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label> Country </label><input class="form-control" type="text"
                                name="country" autocomplete="off" value="<?php echo $_SESSION['country']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Phone</label><input class="form-control" type="text" name="phone"
                                autocomplete="off" value="<?php echo $_SESSION['phone']; ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label> Job Type </label><input class="form-control" type="text"
                                name="job" value="<?php echo $_SESSION['job']; ?>" autocomplete=" off" disabled>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label> Application date </label><input class="form-control" type="text"
                                name="date" autocomplete="off" value="<?php echo date("Y/m/d"); ?>" disabled></div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Form IV Certificate</th>
                            <th scope="col">Form VI Certificate</th>
                            <th scope="col">University Certificate</th>
                            <th scope="col">Others</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="formiv" id="customFile" required
                                        accept=".pdf" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="filevi" id="customFile" required
                                        accept=".pdf" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="unicert" id="customFile" required
                                        accept=".pdf" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="others" id="customFile" required
                                        accept=".pdf">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-5 text-right"><input type="submit" class="btn btn-primary profile-button" name="apply"
                value="Apply">
        </div>
</div>

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


<?php include('../includes/footer.php') ?>