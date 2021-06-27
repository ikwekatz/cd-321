<?php
include('../../includes/header.php');
?>

<body>
	 <div class="card col-md-8 centbox">
    <div class="card-header">
      <h3>Login Form</h3>
    </div>
    <div class="card-body centbox">
  <form class="needs-validation" method="POST" action="<?php echo page;?>private/procces_log.php">
  	<div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="email" class="form-control" name="uname" id="validationCustomUsername" placeholder="Username....." aria-describedby="inputGroupPrepend" required>
      </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationCustomUsername">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">&#128274</span>
        </div>
        <input type="password" class="form-control" id="validationCustomUsername" placeholder="Password....."  name="pwd" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please Enter Password......
        </div>
      </div>
    </div>
</div>
  <div class="row">
    <div class="col-md-3 mb-3">
  <input   type="submit" class="btn btn-primary" name="login" Value="Login">
    </div>
    <div class="col-md-9 mb-3">
      <h6>Don't have an Acount? <a href="<?php echo page?>public/register.php"><span class="text-primary">Register</span></a></h6>
    </div>
  </div>
  </form>
</div>
<div style="height: 200px">

</div>
  <?php
include('../../includes/footer.php');
  ?>
</body>
