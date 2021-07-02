<?php
include('../includes/connection.php');
include('../includes/session.php');
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
    $stmt = $conn->prepare("select user.fname,user.lname,user.email,user.gender,user.phone,user.country,login.pwd, user_type.usertype, login_st.status FROM user JOIN login on login.email=user.email JOIN user_type on user_type.email=user.email join login_st on login_st.email=user.email WHERE login.email='".$usern."' and login.pwd='".$pwd."'");
    $stmt->execute();
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
     if($stmt->rowCount() == 1){
        $_SESSION['fname']=$user['fname'];
        $_SESSION['lname']=$user['lname'];
        $_SESSION['email']=$user['email'];
        $_SESSION['gender']=$user['gender'];
        $_SESSION['phone']=$user['phone'];
        $_SESSION['country']=$user['country'];
        $_SESSION['type']=$user['usertype'];
        $_SESSION['enabled']=$user['status'];
        if( $_SESSION['type']=='Admin'){
            if($_SESSION['enabled']=="Enabled"){
               echo "<script>alert('Login Successfully');location = '../admin/adashboard.php';</script>"; 
           }
           elseif($_SESSION['enabled']=="Dissabled"){
            echo "<script>alert('Your Account have been blocked Contact Administrator');location = './login.php';</script>";
           }
            
        }elseif ($_SESSION['type']=='Normal') {
            if($_SESSION['enabled']=="Enabled"){
                
            echo "<script>alert('Login Successfully');location = './dashboard.php';</script>";
        }
        elseif($_SESSION['enabled']=="Dissabled"){
            echo "<script>alert('Your Account have been blocked Contact Administrator');location = './login.php';</script>";
        }
        }else{
             echo "<script>alert('No such session please login again');location = './login.php';</script>";
        }
        
     }else{
        echo "<script>alert('incorrect Username or password');location.href='./login.php';</script>"; 
            die();
     }
    }
 
?>