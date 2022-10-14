<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nalikulecollege";

$connection = new mysqli($servername, $username, $password, $database);



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql="select * from `admin` where name='$name' and email='$email' and password='$password'";


$result=mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0){
    // $sql="Select username, photo, votes, id, from `userdata` where standard='group'";
    // $resultgroup=mysqli_query($con,$sql);
    // if(mysqli_num_rows($resultgroup)>0){
    //     $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    //     $_SESSION['groups']=$groups;

    // }

    echo '<script>
    alert("You have logged in as an admin");
        window.location="viewStudents.php";
    </script>';
}


else{
    echo '<script>
        alert("Invalid Credentials");
        window.location="adminLogin.php";
    </script>';
}



?>