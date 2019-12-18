<?php
    require_once('session.php');
    require_once('navbar.php');
    require_once('header.php');
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Serial num</th>
          <th>Name</th>
          <th>Email</th>
          <th>message</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
  <?php
    require_once("db.php");
    $query= "SELECT * from contactmessages WHERE status=1 ";
    $res=mysqli_query($connect,$query);

    $COUNT=1;

    foreach ($res as $index) {

?>


  <tr>
  <td><?=$COUNT?></td>
  <td ><?= $index['guest_name'] ;?></td>
  <td ><?=$index['guest_email'] ;?></td>
  <td ><?=$index['guest_sms'] ;?></td>
  <td><a href="markasread.php?mark_id=<?=$index['id']?>">mark as read</a>  </td>


  </tr>

<?php
    $COUNT++;
}

 ?>


</tbody>
</table>
</div>

</body>
</html>
