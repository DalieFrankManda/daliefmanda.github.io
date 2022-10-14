<?php


              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "nalikulecollege";

              $connection = new mysqli($servername, $username, $password, $database);

              if($connection->connect_error){
                die("connection failed: " . $connection->connect_error);
              }

              $sql = "SELECT * FROM students";
              $result = $connection->query($sql);

              if(!$result){
                die("Invalid query: " . $connection->error);
              }


              if(!$result){
                die("Invalid query: " . $con->error);
              }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>View Student</title>
</head>
<body>
    <div class="container mt-5">
        <center>
            <h1>TABLE OF STUDENTS</h1>
        </center>
        <a type="button" class="btn btn-secondary" href="addStudent.php">NEW STUDENT</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">STUDENT_NAME</th>
                <th scope="col">REG_NUMBER</th>
                <th scope="col">DOB</th>
                <th scope="col">SEX</th>
                <th scope="col">EMAIL</th>
                <th scope="col">YEAR_OF_STUDY</th>
                <th scope="col">COMBI</th>
                <th scope="col">DEPARTMENT</th>
                <th scope="col">ACTIONS</th>
              </tr>
            </thead>
            <tbody>


            <?php

              
              while($row = $result->fetch_assoc()){
                echo "
                <tr>
                  <th>$row[name]</th>
                  <td>$row[reg_number]</td>
                  <td>$row[dob]</td>
                  <td>$row[sex]</td>
                  <td>$row[email]</td>
                  <td>$row[year_of_study]</td>
                  <td>$row[combination]</td>
                  <td>$row[department]</td>
                  <td>
                    <a class='btn btn-primary btn-sm' href='editStudent.php?id=$row[id]'><i class='far fa-edit'></i></a>
                    <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'><i class='fas fa-eraser'></i></a>
                  </td>
                </tr>
                ";
              }


              ?>
 
            </tbody>
        </table>
    </div>
</body>
</html>