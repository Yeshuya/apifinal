<h1>Welcome User</h1>

<style>
table{
  margin-left: 100px;
}
  
th, td {
  padding: 15px;
  align: center;
}
  
.confirm {
  position: absolute; 
  bottom: -330pt;
  right: 355pt; 
  width: 406px;
  height: 40pt;
  font-size: 20px; 
  font-family: Quicksand; 
  background-color: #183c64; 
  color: white;
  border-radius: 1em;
  margin-bottom: 50px;
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
<button class="confirm" type="submit"  href="logout-google.php"> Logout </button>

