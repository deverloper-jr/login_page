<?php
session_start();
$conn = mysqli_connect("localhost", "root","", "my_db" );


if(isset($_SESSION['deleteUserId'])){
    $id=$_SESSION['deleteUserId'];


    $result = mysqli_query($conn, "DELETE FROM user WHERE id='$id'");


    if ($result) {

        $_SESSION['deleteUserSuccess']=true;
        unset($_SESSION['deleteUserId']);
        header('location:index.php');

    } else {
        die ("Error deleting record: " . $conn->error);
    }


}
header('location:index.php');
