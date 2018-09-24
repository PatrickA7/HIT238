<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">




  <title>Booking Buddy</title>
</head>
<header>
        <h1 class="h2">Sign Up</h1>
        <p>Register your account</p>
    </header>
<body>
  <form class="form-signin text-center" action="code/signup.code.php" method="POST">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input class="form-control" type="email" placeholder="Email address" required=""  name="email">
    <label for="inputFirstName" class="sr-only">First Name</label>
    <input class="form-control" required="" type="text" placeholder="First Name" name="first">
    <label for="inputLastName" class="sr-only">Last Name</label>
    <input class="form-control"required=""  type="text" placeholder="Last Name" name="last">
    <label for="inputPassword" class="sr-only">Password</label>
    <input class="form-control" required="" type="password"  placeholder="Password" name="password">
    <!--<div class="checkbox mb-3">
      <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
  </form>
    


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
