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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">



  <title>Booking Buddy</title>
</head>

<body>
  <!--Start Nav-->
  <nav class="navbar navbar-dark bg-dark">

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="navbar-collapse collapse" id="navbarsExample01" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="account.php">Account<span class="sr-only">(current)</span></a>
      </ul>
    </div>
  </nav>
  <!--End Nav-->


  <div class="container">
    <div class="head">
      <span>
        <h1 class="port">Booking Buddy</h1>
        </span>
        <p>Space for stuff to be added later</p>
        <form action ="code/signout.code.php" method="POST">
            <button class="btn btn-lg btn-primary" name="submit" type="submit">Logout</button>
            
        </form>
        
    </div>


  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
