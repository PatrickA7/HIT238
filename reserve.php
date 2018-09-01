<?php
session_start();
include('code/connect.code.php');
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
        <a class="btn btn-primary" href="index.php"><i class="material-icons">arrow_back</i></a>
      </ul>
    </div>
  </nav>
  <!--End Nav-->


  <div class="container">
    <h3 class="text-center">Reservation Details</h3>
    <form method="post" action="code/addItemCode.php">
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="reserveDate" required>
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="time" class="form-control" name="reserveTime" required>
        </div>
        <div class="form-group">
            <label>Number of attendees</label>
            <input type="number" class="form-control" name="reserveAttendees" required>
        </div>        
        <button type="submit" class="btn btn-primary" name="saveItem">Reserve</button>
    </form>


  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/js.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>