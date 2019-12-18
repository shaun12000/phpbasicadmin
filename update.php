

<?php
require_once('db.php');

 $id = $_POST['user_id'];

 $mail= $_POST['user_email'];
 $pass= $_POST['user_password'];

 $query="UPDATE users SET password ='$pass' WHERE id='$id' ";
 $res=mysqli_query($connect, $query);
 echo $res;
header("location: admin.php");


?>
