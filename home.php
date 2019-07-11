<?php
session_start();
$userData = $_SESSION['data'];

if (array_key_exists('validUser', $userData) && $userData['validUser']){
    $title = $userData['title'];
    $fullName = $userData['fullName'];
    echo 'Welcome '.$title. ' ' . $fullName;
    echo "<br>";

}else {

    header("Location: index.php");
    unset($_SESSION['data']);


}







