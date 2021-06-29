<?php
include('../includes/connection.php');
include('../includes/session.php');
$errorep="";
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['subscribe'])) {
    $sub=$_POST['sube'];
    $email=test_input($sub);
    $sql=$conn->prepare("INSERT INTO subscriber(email) VALUES ('".$email."')");
    $sql1=$conn->prepare("Select email from subscriber where email='".$email."'");
    $conn->beginTransaction();
    if ($sql1->execute()) {
        $user=$sql1->fetch(PDO::FETCH_ASSOC);
        if ($sql1->rowCount() == 1) {
            $errorep = "Email Have already Subscribed";
        } else {
            
            if (!$sql->execute()) {
                $errorep="Fail to Subscribe";
            }
        }
        if (strcmp($errorep, "") > 0) {
            $conn->rollback();
            echo "<script>alert('".$errorep."');window.location.href='dashboard.php';</script>";
        } else {
            $conn->commit();
            echo "<script>alert('Subscription Successfull');window.location.href='dashboard.php';</script>";
        }
    }

}
?>