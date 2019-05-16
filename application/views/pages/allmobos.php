<?php
   include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Socket:</span>
  <span id="contcolor">Form:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM motherboard";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['motherboard_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['motherboard_socket']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['motherboard_form']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no motherboards!";
    }
   ?>
</div>
</div>
