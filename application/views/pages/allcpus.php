<?php
 include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Speed:</span>
  <span id="contcolor">Cores:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM cpu";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['cpu_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['cpu_speed']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['cpu_cores']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no CPUs!";
    }
   ?>
</div>
</div>
