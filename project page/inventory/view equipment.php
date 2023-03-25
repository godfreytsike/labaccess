<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8" />
    <meta http-equiv="x-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"/> 
    <title>LABORATORTY EQUIPMENT</title>
    <link rel="stylesheet" href="../style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>
<body>
    <header>
        <div class="main-nav">
            <a class="logo">LAB MANAGER</a>

            <ul>
              <li><a href="index.html">HOME</a></li>
              <li><a href="../users/users.html">USERS</a></li>
              <li><a href="../inventory/equipment.html">EQUIPMENT</a></li>
              <li><a href="../servises/services.html">SERVICES</a></li>
            </ul>
        </div>
    
    </header>
  </div>
  <div class="search">
      <input class="srch" type="search" name="type to text">
      <a href="#"> <button class="btn">search</button></a>
    <div class="container">
      <div class="description">
        <h2 class="heading-secondary">
         VIEW ALL LABORATORY EQUIPMENT AND FULL DETAILS 
        </h2>
        <p>toggle the user acess status, view attendace and allow/deny equipmet movement out of the lab</p>
      </div>
          
        </div>
      </div>
</body>
</html>    
<?php
include('database.php');
$query = "SELECT tag_id, instrument_name, clearance, purchased FROM inventory";
$result = $conn->query($query);
?>
<table border="3" cellspacing="1" cellpadding="10">
  <tr>
          <th>tag id</th>
          <th>instrument_name</th>
          <th>clearance</th>
          <th>purchased</th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $data['tag_id']; ?> </td>
   <td><?php echo $data['instrument_name']; ?> </td>
   <td><?php echo $data['clearance']; ?> </td>
   <td><?php echo $data['purchased']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table
 