<?php

if(isset($_GET["id"])){

    $id = $_GET["id"];

    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nalikulecollege";

$connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM students WHERE id=$id";
    $connection->query($sql);


echo '<script>
alert("The student has been deleted successfully");
window.location="viewStudents.php";
</script>';
}


?>