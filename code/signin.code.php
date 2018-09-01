<?php

session_start();


If (isset($_POST['submit'])){
  
  include_once 'connect.code.php';
  
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  //Error handlers
  //input is empty
  if(empty($email) || empty($password)){
    header ("Location: ../signin.php?login=empty");
    exit();
  }else{
    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck <1){
        //no account
      header ("Location: ../signin.php?login=noaccount");
      exit();
    } else{
        //password check
      if($row = mysqli_fetch_assoc($result)){
        $hashedPasswordCheck = password_verify($password, $row['password']);
        //password wrong
        if($hashedPasswordCheck == false){
          header ("Location: ../signin.php?login=passwordwrong");
          exit();
        } else if ($hashedPasswordCheck == true){
            //password correct
          $_SESSION['email'] = $row['email'];
          $_SESSION['first'] = $row['fName'];
          $_SESSION['last'] = $row['lName'];
          $_SESSION['custID'] = $row['custID'];
          header ("Location: ../index.php");
          exit();
        }
        
      }
    }
  }
  
} else {
  header ("Location: ../signin.php?login=error");
  exit();
}
