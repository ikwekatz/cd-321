<?php
//before we store information of our member, we need to start first the session
	
	session_start();
	
	//create a new function to check if the session variable member_id is on set
	function logged_in() {
		if(isset($_SESSION['email'])){
			return true;
		}
		else{
			return false;
		}
        
	}
	//this function if session member is not set then it will be redirected to index.php
	function confirm_logged_in() {
		if (!logged_in()) {
?>
<script type="text/javascript">
window.location = "<?php echo page;?>login.php";
</script>
<?php
	}
	}
	function admin_conf(){
		if($_SESSION['type']=="Admin"){
			return true;
		}else{
			echo "<h1 class='text text-danger'>You are not Allowed to view this page</h1>";
			?>
			<script type="text/javascript">
window.location = "<?php echo page;?>login.php";
</script>
<?php
		}
	}
?>