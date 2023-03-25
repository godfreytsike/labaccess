<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8" />
    <meta http-equiv="x-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"/> 
    <title>update user</title>
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
          <div class="content">
            <h1 class="heading-primary">
                UPDATE LAB-USER ACCESS STATUS
            </h1>
            <p>
               Please insert user id and set access status to allow/deny
            </p>
            <div class="panel-body"> 
            <form method="post" action="updateuser.php" >
            <div class="form-group">
                <label for="userid">user id</label><br>
                <input
                  type="text"
                  class="form-control"
                  id="userid"
                  name="userid"
                />
              </div>
          
             <div class="form-group">
            <label for="accessstatus"> access status</label><br>
            <input type="radio" id="accessstatus" name="accessstatus" value="allow">
            <label for="accessstatus">GRANT ACCESS</label><br>
            <input type="radio" id="accessstatus" name="accessstatus" value="deny">
            <label for="accessstatus">DENY ACCESS</label><br>
            
          </div>
          <input type="submit" class="btn btn-primary" />
          </form>
          </div>
          </div>
    </div>
</body>
</html>    
<?php
include("../database/database.php");
$userid = $_POST['userid'];
$accessstatus = $_POST['accessstatus'];


$sql = "UPDATE labusers SET `access_status`='$accessstatus' WHERE `user_id`=$userid";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>