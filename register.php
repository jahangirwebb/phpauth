
<?php
include('config.php');

if(isset($_POST['register'])){
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  $sql = "SELECT * FROM phpauth WHERE email = '$email' LIMIT 1";
  $result = mysqli_query($db_connect, $sql);
  $row = mysqli_num_rows($result);

  if($row == 1){
    $msg = "<div class='alert alert-danger mt-2' role='alert'>Email Already Registered.</div>";
  }else{
    $query = "INSERT INTO phpauth (name, email, password) VALUES ('$name','$email','$password')";
    $reg_result = mysqli_query($db_connect, $query);
    if($reg_result){
      $msg = "<div class='alert alert-success mt-2' role='alert'>Registration Successful.</div>";
    }

  }
}




 ?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


</head>
<body class="d-flex flex-column bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">Php Authentication</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>

                    </ul>
                </div>
            </div>
        </nav>



<section class=" bg-image">

  <div class="mask d-flex align-items-center gradient-custom-3">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-10 col-md-8 col-lg-6 col-xl-5">
          <div class="card mt-5" style="border-radius: 5px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="" method="POST">

                <div class="form-outline form-group mb-4">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control" placeholder="Your Name" required/>

                </div>

                <div class="form-outline form-group mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control" placeholder="Email Address" required />

                </div>

                <div class="form-outline form-group mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control " placeholder="Password" required/>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body form-control" name="register">Register</button>
                </div>

                <span><?php if(isset($msg)){echo $msg;}   ?></span>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>
