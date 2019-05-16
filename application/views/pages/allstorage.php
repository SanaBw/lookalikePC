<?php
  include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Type:</span>
  <span id="contcolor">Capacity:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM storage";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['storage_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['storage_type']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['storage_capacity']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no memories!";
    }
   ?>
</div>
</div>
