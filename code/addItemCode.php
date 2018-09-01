<?php
session_start();
    if(isset($_POST['saveItem'])){
        include_once 'connect.code.php';
        $sql = "INSERT INTO reservations (custID, date, time, attendees) VALUES(?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        $stmt -> bind_param("issi", $_SESSION['custID'], $_POST['reserveDate'], $_POST['reserveTime'], $_POST['reserveAttendees']);
        $stmt -> execute();
        $stmt -> close();
    }
    header("Location: ../index.php");
?>