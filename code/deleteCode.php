<?php
include_once 'connect.code.php';
if(isset($_POST['rowID']) and is_numeric($_POST['rowID'])){
    $id = $_POST['rowID'];
    $sql = "DELETE FROM reservations WHERE reserveID = '$id'"; 
    $result = mysqli_query($conn, $sql);
    if ( false===$result ) {
        printf("error: %s\n", mysqli_error($conn));
    }
}
header('Location: ../index.php');
?>