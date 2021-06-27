<?php

session_start();
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['gender']);
unset($_SESSION['phone']);
unset($_SESSION['country']);
session_destroy();
?>
<script type="text/javascript">
window.location = "login.php";
</script>