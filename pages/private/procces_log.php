<?php
include('../../includes/connection.php');
include('../../includes/session.php');
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if (isset($_POST['login'])) {
     
    $usern = test_input($_POST["uname"]);
    $password = test_input($_POST["pwd"]);
    $pwd=md5($password);
    $stmt = $conn->prepare("select user.fname,user.lname,user.email,user.gender,user.phone,user.country,login.pwd FROM user  JOIN login on login.email=user.email WHERE login.email='".$usern."' and login.pwd='".$pwd."'");
    $stmt->execute();
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
     if($stmt->rowCount() == 1){
        $_SESSION['fname']=$user['fname'];
        $_SESSION['lname']=$user['lname'];
        $_SESSION['email']=$user['email'];
        $_SESSION['gender']=$user['gender'];
        $_SESSION['phone']=$user['phone'];
        $_SESSION['country']=$user['country'];
        echo "<script>alert('Login Successfully');location = './dashboard.php';</script>";
     }else{
        echo "<script>alert('incorrect Username or password');location.href='../public/login.php';</script>"; 
            die();
     }
    }
 
?>