<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8" />
    <meta http-equiv="x-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"/> 
    <title>MANAGE EQUIPMENT</title>
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
          <li><a href="../index.html">HOME</a></li>
          <li><a href="../users/users.html">USERS</a></li>
          <li><a href="../inventory/equipment.html">EQUIPMENT</a></li>
          <li><a href="services.html">SERVICES</a></li>
      </ul>
  </div>

  </header>
    <div class="container">
          
          <input type="submit" class="btn btn-primary" />
          
          
    </div>
</body>
</html>    
<?php
include("../database/database.php");
$tag_id = $_POST['tag_id'];
$clearance = $_POST['clearance'];


$sql = "UPDATE inventory SET `clearance`='$clearance' WHERE `tag_id`='$tag_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>