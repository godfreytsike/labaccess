<?php
include('database/database.php');

/*retrieve data*/
 {
    $sql = "SELECT tag_id, clearance FROM inventory";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "tag_id: " . $row["tag_id"]. " - clearance: " . $row["clearance"]. "<br>";
    }
    } else {
    echo "0 results";
    }
}
/*compare with data from gsm */
{
    while($row = $result->fetch_assoc()) {
        if ($row["tag_id"] == $elcrow_sms && $row["clearance"] == 'NO') {
          echo "1 " . "<br>";
        } else {
          echo " 0 " . "<br>";
        }
      }
}

?>
