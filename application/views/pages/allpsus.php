<?php
   include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Power:</span>
  <span id="contcolor">Efficiency:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM psu";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['psu_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['psu_power']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['psu_efficiency']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no PSUs!";
    }
   ?>
</div>
</div>
