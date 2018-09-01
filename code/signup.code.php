<?php
session_start();
if (isset($_POST['submit'])) {
  include_once 'connect.code.php';

  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $first = mysqli_real_escape_string($conn,$_POST['first']);
  $last = mysqli_real_escape_string($conn,$_POST['last']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  //error Handling
  if(empty($first) || empty($last) || empty($email) || empty($password)){
    header("Location: ../signup.php?signup=empty");
    exit();
  } else {
    if (!preg_match("/^[a-zA-Z ]*$/", $first) || !preg_match("/^[a-zA-Z ]*$/", $last)){
      header("Location: ../signup.php?signup=invalid");
      exit();
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?signup=invalidemail");
        exit();
      }else{
        $sql = "SELECT * FROM customer WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck > 0){
          header("Location: ../signup.php?signup=emailtaken");
          exit();
        } else {
          //hash password
          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
          //Insert the user into the database
          $sql = "INSERT INTO customer (fName, lName, email ,password) VALUES (?,?,?,?);";
          $stmt = mysqli_prepare($conn, $sql);
          $stmt -> bind_param("ssss", $first, $last, $email, $hashedPassword);
          $stmt -> execute();
          $sql = "SELECT * FROM customer WHERE email='$email'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          $_SESSION['email'] = $row['email'];
          $_SESSION['first'] = $row['fName'];
          $_SESSION['last'] = $row['lName'];
          $_SESSION['custID'] = $row['custID'];
          header("Location: ../signin.php");
          exit();
        }
      }
    }
  }
} else {
  header("Location: ../signup.php?signup=apple");
  exit();
}
?>