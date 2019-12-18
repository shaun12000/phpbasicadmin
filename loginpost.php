<?php
  session_start();
  require_once('db.php');
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);



    $query="SELECT count(*) as shaun , role ,name FROM  users WHERE email='$email' and password='$pass' ";
    $res =mysqli_query($connect , $query);
    $assoc=mysqli_fetch_assoc($res);
    if ($assoc['shaun'] == 1) {
      if ($assoc['role'] == 1) {
        $_SESSION['admin']='super admin';

      }
      else {
        $_SESSION['admin']='user';
      }
        $_SESSION['name']= $assoc['name'];
     $_SESSION['shaun']= "y";
     setcookie("login_status","yes",time()+10000);
     header('location: admin.php');
    }
    else {
      echo "NOT ALLOWED !! registration first " . "<a href='form.php'> REGISTRATION HERE</a>"; ;
    }



 ?>
