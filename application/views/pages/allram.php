<?php
   include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Size::</span>
  <span id="contcolor">Speed:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM ram";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['ram_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['ram_size']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['ram_speed']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no memories!";
    }
   ?>
</div>
</div>
