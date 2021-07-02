<?php 
include('../includes/connection.php');
include('../includes/session.php') ;
$jobid="";
$conn->beginTransaction();
if (isset($_POST['apply'])) {
    $email=$_SESSION['email'];
    $job=$_SESSION['job'];
    $formiv = $_FILES['formiv']['tmp_name'];
    $formiv = addslashes(file_get_contents($formiv));
    $formvi = $_FILES['filevi']['tmp_name'];
    $formvi = addslashes(file_get_contents($formvi));
    $unicert = $_FILES['unicert']['tmp_name'];
    $unicert = addslashes(file_get_contents($unicert));
    $other = $_FILES['others']['tmp_name'];
    $other = addslashes(file_get_contents($other));
    $apldate=date("Y-m-d");
     if($job=='Programmer Post'){
            $jobid="PJP21";
           }
           elseif($job=='Graphics Design Post'){
            $jobid="GDJP21";
           }
           elseif($job=='Network Administration Post'){
            $jobid="NEJP21";
           }
           elseif($job=='Video Editor Post'){
            $jobid="VEJP21";
           }
           elseif($job=='Database Administration Post'){
            $jobid="DAJP21";
           }
        $qery=$conn->prepare("INSERT INTO applicants ( email, jobid, formiv, formvi, unicert, other, appl_date, jobType) VALUES ('".$email."','".$jobid."','".$formiv."','".$formvi."','".$unicert."','".$other."','".$apldate."','".$job."')");

        if (!$qery->execute()) {
            $error="Fail to apply Job";
        }
        if (strcmp($errorep, "") > 0) {
            $conn->rollback();
            echo "<script>alert('".$errorep."');window.location.href='dashboard.php';</script>";
        } else {
            $conn->commit();
            echo "<script>alert('Job Application Successfull');window.location.href='dashboard.php';</script>";
        }
    }
}

?>