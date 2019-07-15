<?php
session_start();

$conn = mysqli_connect("localhost", "root","", "my_db" );

$editName = $_POST['editName'];
$editLastName = $_POST['editLast'];
$editGender = $_POST['editGender'];
$editEmail = $_POST['editEmail'];
$editUserName = $_POST['editUsername'];
$userId = $_POST['userId'];

$myQuery = mysqli_query($conn,"update user set first_name = '$editName',
last_name = '$editLastName', gender = '$editGender', email = '$editEmail',
 username = '$editUserName' where id = '$userId'");


if ($editGender === 'm') {
    $title = 'Mr. ';

} else {
    $title = 'Mrs. ';
}


$myArray = [
    'id' => $userId,
    'firstname' => $editName,
    'lastname' => $editLastName,
    'fullName' => $editName . ' ' . $editLastName,
    'validUser' => true,
    'title' => $title,

];
unset($_SESSION['data']);
$_SESSION["data"] = $myArray;


header("Location: home.php");
