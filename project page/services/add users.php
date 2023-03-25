<!DOCTYPE html>
<html>
  <head>
    <meta cahrset="UTF-8" />
    <meta http-equiv="x-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0"/> 
    <title> ADD USER</title>
    <link rel="stylesheet" href="../style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
<head>
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
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
           
              <input type="submit" class="btn" />
        
          </div>
          
        </div>
      </div>
    </div>
    
  
  </div>
  </body>
</html>
<?php
include("../database/database.php");
	$tagid = $_POST['tagid'];
	$userid = $_POST['userid'];
	$usernames = $_POST['usernames'];
	$occupation = $_POST['occupation'];
	$email = $_POST['email'];
	$mobilecontacts = $_POST['mobilecontacts'];
    $accessstatus = $_POST['accessstatus'];

	// Database connection
	/*$conn = new mysqli('localhost','root','','fost laboratory');*/
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into labusers (tag_id, user_id, user_names, occupation, email, mobile_contacts, access_status) values(?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssssis", $tagid, $userid, $usernames, $occupation, $email, $mobilecontacts, $accessstatus);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>