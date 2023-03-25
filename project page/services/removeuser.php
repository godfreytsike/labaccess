<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8" />
    <meta http-equiv="x-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"/> 
    <title>REMOVE USERS </title>
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
            <a  class="logo">LAB MANAGER</a>

            <ul>
                <li><a href="../index.html">HOME</a></li>
                <li><a href="users.html">USERS</a></li>
                <li><a href="../inventory/equipment.html">EQUIPMENT</a></li>
                <li><a href="../services/services.html">SERVICES</a></li>
            </ul>
        </div>
    
    </header>
    
          
           
          <input type="submit" class="btn btn-primary" />
          
          
   
</body>
</html>    
<?php
include ("../database/database.php");
$userid = $_POST['userid'];

// sql to delete a record
$sql = "DELETE FROM labusers WHERE `user_id`=$userid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>