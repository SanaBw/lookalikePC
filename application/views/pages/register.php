<?php
   
   

    include_once('connection.php');
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    $response = '';


    $checkquery="SELECT * FROM users WHERE username='$username'";

    
    if ($result=mysqli_query($conn,$checkquery))
    {
  
        $rowcount=mysqli_num_rows($result);
        
        if($rowcount>=1){
           //someone has that username
          
        } else
        {    
            
            $query="INSERT INTO users (first_name,last_name,username,email,password) VALUES ('$firstName','$lastName','$username','$email','$password')";
            mysqli_query($conn,$query);
        }
  }

    
   
    mysqli_close($conn);

  
?>

