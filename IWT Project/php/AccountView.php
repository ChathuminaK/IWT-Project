<?php
include("config2.php");

$sql = "SELECT * FROM person";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "<table border='1px'>";
      echo "
                <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Nickname</th>
                <th>Country</th>
                <th>Address Line 1</th>
                <th>Address Line 2</th>

                </tr>";


      while($row = mysqli_fetch_assoc($result)) {
          echo "
                <tr>
                
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['dob']."</td>
                <td>".$row['nickname']."</td>
                <td>".$row['country']."</td>
                <td>".$row['address1']."</td>
                <td>".$row['address2']."</td>
                
                </tr>";
      }
      echo "</table>";
    } 
    else {
      echo "No data available";
    }


    mysqli_close($conn);
    ?>