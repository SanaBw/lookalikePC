<?php
  include 'connection.php';
 ?>

<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Memory:</span>
  <span id="contcolor">Clock:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM gpu";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['gpu_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['gpu_memory']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['gpu_clock']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no GPUs!";
    }
   ?>
</div>
</div>
