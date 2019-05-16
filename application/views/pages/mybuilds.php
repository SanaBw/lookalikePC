<?php

    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }


    if(isset($_SESSION['id'])){
        $user_id=$_SESSION['id'];
        include_once('connection.php');
        $query = "SELECT * FROM users WHERE (id= $user_id);";

        $data = mysqli_query($conn, $query);
        $rows=mysqli_num_rows($data);

        if($rows==1){
            $row=mysqli_fetch_array($data);
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $username=$row['username'];

           ?> <p id="mybuildsp"> Welcome, <?php echo $username; ?> ! </p>

           <?php
              include 'connection.php';
            ?>

           <div id="buildscont">
           <p>
             <span id="buildcontname">Name:</span>
             <span id="buildcontname">Case:</span>
             <span id="buildcontname">CPU:</span>
             <span id="buildcontname">Cooler:</span>
             <span id="buildcontname">GPU:</span>
             <span id="buildcontname">RAM:</span>
             <span id="buildcontname">Storage:</span>
             <span id="buildcontname">Mobo:</span>
             <span id="buildcontname">PSU:</span>
             <span id="buildcontname">Cables:</span>
           </p>
           <div id="allcases3">
             <?php

               $sql = "SELECT * FROM builds WHERE (user_id= $user_id)";
               $result = mysqli_query($conn, $sql);
               if (mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){

                   echo "<p>";
                   echo "<span id='buildname1'>".$row['name']."</span>";
                   echo "<span id='buildname1'>".$row['cse']."</span>";
                   echo "<span id='buildname1'>".$row['cpu']."</span>";
                   echo "<span id='buildname1'>".$row['cpu_cooler']."</span>";
                   echo "<span id='buildname1'>".$row['gpu']."</span>";
                   echo "<span id='buildname1'>".$row['ram']."</span>";
                   echo "<span id='buildname1'>".$row['storage']."</span>";
                   echo "<span id='buildname1'>".$row['motherboard']."</span>";
                   echo "<span id='buildname1'>".$row['psu']."</span>";
                   echo "<span id='buildname1'>".$row['cables']."</span>";
                   echo "</p>";
                 }
               } else {
                 echo "There are no builds!";
               }
              ?>
           </div>
           </div>

           <?php
        }
    }else{
        header("Location: loginregister");
        exit;
    }
?>
