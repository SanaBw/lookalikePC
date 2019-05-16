<?php
 include 'connection.php'; ?>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    var casesCount = 1;
    $("button").click(function() {
      casesCount = casesCount + 1;
      $("#allcases").load("load-cases", {
        casesNewCount: casesCount
      });
    });
  });
</script>
-->
<div id="allcasescont">
<p>
  <span id="contname">Name:</span>
  <span id="conttype">Type:</span>
  <span id="contcolor">Color:</span>
</p>
<div id="allcases">
  <?php
    $sql = "SELECT * FROM cse";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo "<span id='csename'>".$row['cse_name']."</span>";
        echo "\t";
        echo "<span id='csetype'>".$row['cse_type']."</span>";
        echo "\t";
        echo "<span id='csecolor'>".$row['cse_color']."</span>";
        echo "</p>";
      }
    } else {
      echo "There are no cases!";
    }
   ?>
</div>
</div>
<!--<button id=showmorecases>Show more</button>-->
