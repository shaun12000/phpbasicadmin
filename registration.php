<?php
    require_once("db.php");
    $name= $_POST['name'];
    $email= $_POST['email'];
    $pass= md5($_POST['pass']);

    if (!empty ($name) && !empty($email) && !empty ($pass) ) {

    }
    else {
      echo "please go to the resigtration form and fill up it ,thanks";;
    }


    $query="INSERT into users (name, email, password) values ('$name' , '$email' , '$pass')";
    $res =mysqli_query($connect , $query);
    header('location: admin.php');

 ?>
