<?php
   include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM cpu_cooler";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['cpu_cooler_name']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no coolers!";
    }
   ?>
</div>
</div>
