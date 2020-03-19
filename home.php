<h1>Welcome User</h1>

<style>
table, th, td {
  border: 1px solid black;
  padding: 15px;
}
</style>

<table>
  <tr>
    <th rowspan="3"><img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:50%"></th>
  </tr>
  <tr>
    <td>Name: <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?> </td>
  </tr>
  <tr>
    <td>Email: <?php echo $_SESSION['user_email_address'] ?></td>
  </tr>
</table>
<h1><a href="logout-google.php">Logout</a></h1>

