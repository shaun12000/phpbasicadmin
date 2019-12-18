<?php

session_start();
require_once("db.php");
$name= $_POST['guest_name'];
$email= $_POST['guest_email'];
$sms= $_POST['guest_sms'];


    $query="INSERT into contactmessages  (guest_name, guest_email, guest_sms ) values ('$name' , '$email' , '$sms')";
    $res =mysqli_query($connect , $query);
    $_SESSION['sendyes']='y';
    header('location: index.php');


 ?>
