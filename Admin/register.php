<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aspiration Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<?php
include 'database/db.php';
?>
<div class="regpage">
  <div class="text-center">
    <h1 class="h4 text-light-900 mb-4">Create an Account!</h1>
  </div>
  <form class="user" action="registerAction.php" method="post" class="container">
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required>
      </div>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required>
      </div>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required type="email">
    </div>
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      </div>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password" required>
      </div>
    </div>
    <div id="passwordError" style="color:red;display:none;">Password does not match</div>
    <button class="btn btn-primary btn-user btn-block" type="submit" onclick="return validatePassword()">Register Account </button>
  </form>
  <hr>
  <div class="text-center">
        <a class="small" href="forgot-password.php">Forgot Password?</a>
            </div>
            <div class="text-center">
        <a class="small" href="login.php">Already have an account? Login!</a>
    </div>

</div>


<script>
  function validatePassword() {
    var password = document.getElementById("password").value;
    var repeatPassword = document.getElementById("repeatPassword").value;
    var passwordError = document.getElementById("passwordError");

    if (password !== repeatPassword) {
      passwordError.style.display = "block";
      return false;
    }

    // if (password.length < 6) {
    //     passwordError.style.display = "block";
    //     passwordError.innerHTML = "Password must be at least 6 characters long";
    //     return false;
    // }

    passwordError.style.display = "none";
    return true;
  }
</script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>