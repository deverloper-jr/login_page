<?php
session_start();
$result = mysqli_connect("localhost", "root","", "my_db" );
$userData = $_SESSION['data'];


if (array_key_exists('validUser', $userData) && $userData['validUser']){
    $title = $userData['title'];
    $fullName = $userData['fullName'];
    echo 'Welcome '.$title. ' ' . $fullName;
    echo "<br>";

} else {

    header("Location: index.php");
    unset($_SESSION['data']);



}
$userId = $userData['id'];
$_SESSION['editUser'] =$userId;
$_SESSION['deleteUserId'] =$userId;


?>

<form method="POST" action="edit.php">
		<input type="submit" name="edit" value="Edit">
</form>
</form>
<form method="POST" action="delete.php">
    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
</form>









