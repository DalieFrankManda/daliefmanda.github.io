<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nalikulecollege";

$connection = new mysqli($servername, $username, $password, $database);


$name = $_POST['name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


if($password != $cpassword){
    echo '<script>
    alert("Password did not match");
    window.location="admin.php";
    </script>';
}

else{
    
    $sql="insert  into `admin` (name, sex, email, password) values ('$name', '$sex', '$email', '$password')";

    $result=mysqli_query($connection, $sql);
    if($result){
        echo '<script>
        alert("You have registered successfully as an admin ");
        window.location="index.php";
        </script>';
        }
    else{
        die(mysqli_error($connection));
    }
}


?>