<?php
include("viewusers1.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>

       <th>tag_id</th>
          <th>user_id</th>
          <th>user_names</th>
          <th>occupation</th>
          <th>email</th>
          <th>mobile_contacts</th>
          <th>access_status</th>
          <th>time_in</th>
          <th>time_out</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
     
      <td><?php echo $data['tag_id']??''; ?></td>
      <td><?php echo $data['user_id']??''; ?></td>
      <td><?php echo $data['user_names']??''; ?></td>
      <td><?php echo $data['occupation']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['mobile_contacts']??''; ?></td>
      <td><?php echo $data['access_status']??''; ?></td>  
      <td><?php echo $data['time_in']??''; ?></td>  
      <td><?php echo $data['time_out']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>