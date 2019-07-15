<?php
session_start();
$conn = mysqli_connect("localhost", "root","", "my_db" );

if (isset($_SESSION['editUser'])) {
    $id = $_SESSION['editUser'];

    $result = mysqli_query($conn,"select * from user where id = '$id'");

    $row = mysqli_fetch_assoc($result);


    if($row) {
        echo "<form method=\"POST\" action=\"update.php\"> ";

        echo "ID: " . "<input type='text' name='uniqueid' value=" .$row['id'] . ">" . "<br>";
        echo "Firstname: " . "<input type='text' name='editName' value=" .$row['first_name'] . ">" . "<br>";
        echo "Lastname: " . "<input type='text' name='editLast' value=" .$row['last_name'] . ">" . "<br>";
        echo "Gender: " . "<input type='text' name='editGender' value=" .$row['gender'] . ">" . "<br>";
        echo "Email: " . "<input type='text' name='editEmail' value=" .$row['email'] . ">" . "<br>";
        echo "Username " . "<input type='text' name='editUsername' value=" .$row['username'] . ">" . "<br>";
        echo  "<input type='hidden' name='userId' value=" .$id . ">" . "<br>";
        echo  "<input type='submit' name='edit' value='Update'>";
        echo "</form>";
    }
}
