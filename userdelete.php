<?php

require_once('db.php');

 $id = $_GET['user_id'];



 $query="DELETE from users  WHERE id='$id' ";
 $res=mysqli_query($connect, $query);
 echo $res;
header("location: admin.php");

 ?>
