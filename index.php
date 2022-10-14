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

            <center>
                <h3>ADMIN LOGIN</h3>
            </center>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="name" placeholder="Enter name" required="required">
                </div>


                <div class="mb-3">
                    <input type="text" class="form-control m-auto" name="email" placeholder="Enter email" required="required">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control m-auto" name="password" placeholder="Enter password" required="required">
                </div>


                <center>
                <button type="submit" class="btn btn-secondary">LOGIN</button>
                </center>
                
        
                
            </form>

            <center class="mt-4">
            <p>Don't have an account? <a href="admin.php">Register</a></p>
            </center>


        </div>
    </div>


    
</body>
</html>