<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">




  <title>Booking Buddy</title>
</head>

<body>
  <!--Start Nav-->
  <form class="form-signin text-center" action="code/signin.code.php" method="POST" >
    <h1 class="h2">Booking Buddy</h1>
    <h1 class="h4 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
    <label for="inputPassword" class="sr-only" >Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
    <a class="btn btn-sm btn-outline-secondary btn-block" href="signup.php">Sign up</a>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
