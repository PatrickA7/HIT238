<?php
If (isset($_POST['submit'])){
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../signin.php");
  exit();
}