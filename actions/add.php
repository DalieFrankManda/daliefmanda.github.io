<?php

include('connection.php');

$name=$_POST['name'];
$reg_number=$_POST['reg_number'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$year_of_study=$_POST['year_of_study'];
$combination=$_POST['combination'];
$department=$_POST['department'];



$sql="insert  into `students` (name, reg_number, sex, dob, email, year_of_study, combination, department) values ('$name', '$reg_number', '$sex', '$dob', '$email', '$year_of_study', '$combination', '$department')";

    $result=mysqli_query($con, $sql);
    if($result){
        echo '<script>
        alert("The student has been registered successfully");
        window.location="../viewStudents.php";
        </script>';
        }
    else{
        die(mysqli_error($con));
    }


?>