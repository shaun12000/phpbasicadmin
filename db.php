<?php

$hostname="localhost";
$home="root";
$password="";
$databasename="users";

$connect = mysqli_connect($hostname,$home,$password,$databasename);
// if error come
if (mysqli_connect_errno()) {
   echo "error here";
}


 ?>
