
 <?php
 require_once('db.php');

  $mark_id = $_GET['mark_id'];

  $query="UPDATE contactmessages SET status=2  WHERE id=$mark_id ";
  $res=mysqli_query($connect, $query);

 header("location: contactmessage.php");


 ?>
