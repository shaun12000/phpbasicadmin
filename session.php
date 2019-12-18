<?php
 session_start();
 if (!isset( $_SESSION['shaun'])) {
   header('location: loginform.php');
 }

 ?>
