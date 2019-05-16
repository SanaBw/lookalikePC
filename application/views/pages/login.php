<?php


   if(isset($_POST['usernameLog']) && isset($_POST['passwordLog'])){


        include_once('connection.php');

        $username=$_POST['usernameLog'];
        $password=$_POST['passwordLog'];


       $query = "SELECT * FROM users WHERE (username='$username' AND password='$password');";


        $dataPhp = mysqli_query($conn,$query);

        if($dataPhp==true){
           $row=mysqli_fetch_assoc($dataPhp);
            $id=$row['id'];
            session_start();

            $_SESSION['id'] = $row['id'];
        } 

 }


?>
