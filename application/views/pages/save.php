 <?php include_once('connection.php');
    
    $user_id=$_SESSION['id'];

    $name=$_POST['name'];
    $cse=$_POST['cse'];
    $cpu=$_POST['cpu'];
    $cpu_cooler=$_POST['cpu_cooler'];
    $gpu=$_POST['gpu'];
    $ram=$_POST['ram'];
    $storage=$_POST['storage'];
    $motherboard=$_POST['motherboard'];
    $psu=$_POST['psu'];
    $cables=$_POST['cables'];

    $query="INSERT INTO builds (name, user_id, cse, cpu, cpu_cooler, gpu, ram, storage, motherboard, psu, cables) VALUES ('$name','$user_id','$cse','$cpu','$cpu_cooler','$gpu','$ram','$storage','$motherboard','$psu','$cables')";


   mysqli_query($conn,$query);

    mysqli_close($conn);

?>