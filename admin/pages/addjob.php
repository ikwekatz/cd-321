<?php 
include('../../includes/connection.php');
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['save'])){
	$error="";
	$jobid=test_input($_POST['jid']);
	$job=test_input($_POST['jname']);
	$sql=$conn->prepare("INSERT INTO jobs(jobid, jobName) VALUES ('".$jobid."','".$job."')");
	$test=$conn->prepare("Select jobid from jobs where jobid='".$jobid."'");
	$test->execute();
    $user=$test->fetch(PDO::FETCH_ASSOC);
    if($test->rowCount() == 1){
    	$error="Job Already Exist";
     }else{
     	$conn->beginTransaction();
     	if(!$sql->execute()){
     		$error="Job cannot be added";
     	}
     	if (strcmp($error, "") > 0) {
            $conn->rollback();
            echo $errorep;
            echo "<script>alert('Job faill to add');window.location.href='job.php';</script>";

        } else {
              $conn->commit();
             echo "<script>alert('Job succesful added click ok to login');window.location.href='job.php';</script>";
               }

     }
}

?>