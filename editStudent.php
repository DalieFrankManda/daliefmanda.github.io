<?php

$id = "";
$name = "";
$reg_number = "";
$sex = "";
$dob = "";
$email = "";
$year_of_study = "";
$combination = "";
$department = "";

//connection created

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "nalikulecollege";

$connection = new mysqli($servername, $username, $password, $database);




if($_SERVER['REQUEST_METHOD'] == 'GET'){

    //GET method: Show the data of the students
    if(!isset($_GET["id"])){
        header("location:/index.php");
        exit;

    }
    
    $id = $_GET["id"];

    //read the row of the selected student from the database

    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: index.php");
        exit;
    }

    $name = $row["name"];
    $reg_number = $row["reg_number"];
    $sex = $row["sex"];
    $dob = $row["dob"];
    $email = $row["email"];
    $year_of_study = $row["year_of_study"];
    $combination = $row["combination"];
    $department=$row["department"];
    
    
    
}
else {
    //POST method: Update the data of the student

    $name = $_POST["name"];
    $reg_number = $_POST["reg_number"];
    $sex = $_POST["sex"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $year_of_study = $_POST["year_of_study"];
    $combination = $_POST["combination"];
    $department = $_POST["department"];

    // $sql = "UPDATE students " .
    //         "SET name = '$name', reg_number = '$reg_number', sex = '$sex', dob = '$dob', email = '$email', year_of_study = '$year_of_study', combination = '$combination', department = '$department' " .
    //         "WHERE id = $id";

    $sql="update `students` SET name='$name',reg_number='$reg_number',sex='$sex', dob='$dob', email='$email', year_of_study='$year_of_study', combination='$combination', department='$department' WHERE `id`='$id'";

    $result = $connection->query($sql);

    echo '<script>
    alert("The student has been updated successfully");
    window.location="index.php";
    </script>';
}


    // header("location: index.php");
    // exit;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCE Registration</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>


<body class="bg-info">


    <div class="container col-md-6 p-5">
        <div class="p-3 border border-warning bg-secondary bg-light">

            <center class="pb-3">
                <img src="NalikuleLogo.png" class="img-thumbnail center" alt="NalikuleLogo" style="width: 200px; height: 200px">

            </center>

            <form method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="name" placeholder="Enter name" required="required" value="<?php echo $name; ?>">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="reg_number" placeholder="Enter reg number" required="required" value="<?php echo $reg_number; ?>">
                </div>

                <div class="mb-3">
                    <select name="sex" class="form-select m-auto" value="<?php echo $sex; ?>">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                

                <div class="mb-3">
                    <input type="date" class="form-control m-auto" name="dob" placeholder="Enter DOB" required="required" value="<?php echo $dob; ?>">
                </div>
                
                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="email" placeholder="Enter email" required="required" value="<?php echo $email; ?>">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="year_of_study" placeholder="Enter year_of_study" required="required" value="<?php echo $year_of_study; ?>">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="combination" placeholder="combination" required="required" value="<?php echo $combination; ?>">
                </div>

                <div class="mb-3">
                    <select name="department" class="form-select m-auto" value="<?php echo $department; ?>">
                        <option value="science">science</option>
                        <option value="language">language</option>
                    </select>
                </div>




                <center>
                <button type="submit" class="btn btn-secondary">UPDATE</button>
                </center>
                
        
                
            </form>


        </div>
    </div>


    
</body>
</html>


