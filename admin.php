<?php
    require_once('session.php');
  if (!isset($_COOKIE['login_status'])) {
    header("location: loginform.php");
  }
    require_once('navbar.php');
    require_once('header.php');
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Serial num</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
<?php
    require_once("db.php");
    $query= "select * from users";
    $res=mysqli_query($connect,$query);
    $COUNT=1;

    foreach ($res as $index) {

?>
  <tr>
  <td><?=$COUNT?></td>
  <td ><?= $index['name'] ;?></td>
  <td ><?=$index['email'] ;?></td>
  <td><a href="update_form.php?user_id=<?=$index['id']?>&user_email=<?=$index['email']?>">Edit</a> | <a href="userdelete.php?user_id=<?=$index['id']?>&user_email=<?=$index['email']?>">Delete</a> </td>
  </tr>

<?php
    $COUNT++;
}

 ?>
 <h2>welcome  <?= $_SESSION['admin'] ?></h2>
 <h2><?= $_SESSION['name'] ?> </h2>


</tbody>
</table>
</div>

</body>
</html>
