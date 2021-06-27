<?php
include('../../includes/connection.php');
if (isset($_POST['register'])) {
$errorep="";
$fname=trim($_POST['fname']);
$lname=trim($_POST['lname']);
$email=trim($_POST['email']);
$pwd=trim(md5($_POST['pwd']));
$phone=trim($_POST['phone']);
$gender=trim($_POST['gender']);
$dob=trim($_POST['dob']);
$country=trim($_POST['country']);
$fileID=trim($_POST['fileID']);
$skills=trim(implode( ',',$_POST['skills']));
$sql1=$conn->prepare("INSERT INTO login(email, pwd) values ('".$email."','".$pwd."')");
$sql3=$conn->prepare("INSERT INTO user(fname, lname, email, gender, dob, file, phone, country) values ('".$fname."','".$lname."','".$email."','".$gender."','".$dob."','".$fileID."','".$phone."','".$country."')");
$sql4=$conn->prepare("INSERT INTO app_type(email, skills) VALUES ('".$email."','".$skills."')");
$sql5=$conn->prepare("INSERT INTO user_type(email) VALUES ('".$email."')");
$stmt=$conn->prepare("SELECT email FROM user where email='" . $email . "'");
if ($stmt->execute()){
                      $user=$stmt->fetch(PDO::FETCH_ASSOC);
                        if($stmt->rowCount() == 1){
                        $errorep = "user already exit in database";

                    }else {
                      $conn->beginTransaction(); # start transaction to insert in multiple tables if no error occurs
                        #insertion

                        if (!$sql3->execute()) {
                            #error
                            $errorep = "Fail to Add User";
                        }
                        if (!$sql1->execute()) {
                            #error
                            $errorep = "Error on user Details";

                        }
                        if(!$sql4->execute()){
                          $errorep = "Error on inserting Skills ";
                        }
                        if(!$sql5->execute()){
                          $errorep = "Error on Inserting user type ";
                        }
                        if (strcmp($errorep, "") > 0) {

                            $conn->rollback();
                            echo $errorep;
                             echo "<script>alert('Registration Fails');window.location.href='../public/register.php';</script>";

                        } else {
                            $conn->commit();
                             echo "<script>alert('Thank you for register click ok to login');window.location.href='../public/login.php';</script>";
                        }

}


}
}
?>