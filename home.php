<style>
h1{
  text-align: center;
}
  
table{
  margin-left: 300px;
  width: 50%;
  font-family: "Quicksand";
  border-collapse: collapse;  
}
  
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  
.confirm {
  position: absolute; 
  bottom: -240pt;
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

<h1>Welcome User</h1>

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
<a href="logout-google.php"><button class="confirm"> Logout </button></a>

