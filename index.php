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

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="navbar-collapse collapse" id="navbarsExample01" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="account.php">Account</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--End Nav-->


    <div class="container">
        <div class="head">
            <h1>Booking Buddy</h1>
            <h2 class="card-title">Hi 
            <?
            echo $_SESSION["first"];
            ?>!
            </h2>
         </div>
    </div>
    <div class ="container">
        <h2>Your Reservations</h2>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Time</th>
                    <th scope='col'>Number of attendees</th>
                    <th></th>
                </tr>
            </thead>
            <?php
            $customer = $_SESSION['custID'];
            $results = mysqli_query($conn, "SELECT * FROM reservations WHERE custID = $customer") or die("Please login or create an account");
            while ($row = mysqli_fetch_array($results)) { 
                echo '<tr>
                <td>'.date('d-m-Y', strtotime($row['date'])).'</td>
                <td>'.date('h:i a', strtotime($row['time'])).'</td>
                <td>'.$row['attendees'].'</td>
                <td>
                     <form action="code/deleteCode.php" method="post">
                          <input type="hidden" value="'.$row['reserveID'].'" name="rowID">
                          <input type="submit" value="Remove">
                     </form>
                </td>
              </tr>';
             } 
             ?>
        </table>
    <a href="reserve.php" class="btn btn-primary btn-lg" role="button">New Reservation</a>
    </div>



  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
