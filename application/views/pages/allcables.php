<?php
  include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Color:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM cables";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['cables_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['cables_color']."</span>";
      }
    } else {
      echo "There are no cables!";
    }
   ?>
</div>
</div>
