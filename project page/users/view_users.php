<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8" />
    <meta http-equiv="x-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"/> 
    <title>USERS </title>
    <link rel="stylesheet" href="../style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
<head>
<body>
    <header>
        <div class="main-nav">
            <a href="index.html" class="logo">LAB MANAGER</a>

            <ul>
              <li><a href="../index.html">HOME</a></li>
              <li><a href="users.html">USERS</a></li>
              <li><a href="../inventory/equipment.html">EQUIPMENT</a></li>
              <li><a href="../service/services.html">SERVICES</a></li>
            </ul>
        </div>
    
    </header>
    <div class="container">
      <div class="description">
        <h2 class="heading-secondary">
          VIEW REGISTERED LAB USERS' DETAILS
        </h2>
        <p>toggle the user acess status, view attendace and allow/deny equipmet movement out of the lab</p>
      
      </div>

      
</body>

</html>  
<?php
include('../database/database.php');
$query = "SELECT tag_id, user_id, user_names, occupation, email, mobile_contacts, access_status, time_in, time_out FROM labusers";
$result = $conn->query($query);
?>
<table border="3" cellspacing="1" cellpadding="1">
  <tr>
    <th>tag id</th>
          <th>user id</th>
          <th>user names</th>
          <th>occupation</th>
          <th>email</th>
          <th>mobile contacts</th>
          <th>access_status</th>
          <th>time in</th>
          <th>time out</th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $data['tag_id']; ?> </td>
   <td><?php echo $data['user_id']; ?> </td>
   <td><?php echo $data['user_names']; ?> </td>
   <td><?php echo $data['occupation']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['mobile_contacts']; ?> </td>
   <td><?php echo $data['access_status']; ?> </td>
   <td><?php echo $data['time_in']; ?> </td>
   <td><?php echo $data['time_out']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table
 