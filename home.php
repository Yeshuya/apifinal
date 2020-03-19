<h1>Welcome User</h1>

<table>
  <tr>
    <th rowspan="3"><img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:100%"></th>
  </tr>
  <tr>
    <td><h1>Name: <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?> </h1></td>
  </tr>
  <tr>
    <td><h1>Email: <?php echo $_SESSION['user_email_address'] ?></h1></td>
  </tr>
  <tr>
    <td><h1>Gender: <?php echo $_SESSION['user_gender'] ?></h1></td>
  </tr>
</table>
<h1><a href="logout-google.php">Logout</a></h1>

