<?php
 include 'connection.php';

  $casesNewCount = $_POST['casesNewCount'];

  $sql = "SELECT * FROM cse LIMIT $casesNewCount";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo "<p>";
      echo $row['cse_name'];
      echo "\t";
      echo $row['cse_type'];
      echo "\t";
      echo $row['cse_color'];
      echo "</p>";
    }
  } else {
    echo "There are no cases!";
  }
?>
