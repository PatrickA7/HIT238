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
        <h1 class="h2">Booking Buddy</h1>
        <p>Your companion for booking reservations on the go</p>
    </header>

    <body>
      <section class="login-form">
          <form class="form-signin text-center" action="code/signin.code.php" method="POST" >
            <h1 class="h4 mb-3 font-weight-normal">Sign in or Register</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
            <label for="inputPassword" class="sr-only" >Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
            <div class="checkbox mb-3">
            </div>
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
            <a class="btn btn-sm btn-outline-secondary btn-block" href="signup.php">Sign up</a>
          </form>
         </section>
         <section class="info-block">
            <h2>Features</h2>
            <div class="row">
                <div class="column">
                    <h3>Book a table at your favorite restaurant</h3>
                    <img src="assets/img/waiter-icon.png">
                    <p>Whether it's dinner with the family or a quiet night out, Booking Buddy gives you control over every detail of your reservation</p>
                </div>
                <div class="column">
                    <h3>Save reservations</h3>
                    <img src="assets/img/list-icon.png">
                    <p>View future reservations and get notified on your reservation day</p>
                </div>
                <div class="column">
                    <h3>Fast, reliable, and portable</h3>
                    <img src="assets/img/smartphone-icon.png">
                    <p>Book tables quickly from your phone or tablet</p>
                </div>
            </div>
         </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/main.js"></script>
    </body>
    <section class="footer">
        <p>&copy; Booking Buddy 2018</p>
        <div>Icons made by <a href="https://www.flaticon.com/authors/epiccoders" title="EpicCoders">EpicCoders</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </section>

</html>
