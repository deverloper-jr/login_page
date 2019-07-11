<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_connect("localhost", "root","", "my_db" );

$result = mysqli_query($result,"select * from user where (email = '$email' or username = '$email')  and password = '$password'")
    or die("Fail to query database ".mysqli_error());
// first u need to fetch proper data which is now associative array
$row = mysqli_fetch_assoc($result);

/*if ($email != "" && $password != ""){*/
    if ($row){  //($row['email'] == $email or $row['username'] == $email && $row['password'] == $password) { //if($row)


        if ($row['gender'] === 'm') {
            $title = 'Mr. ';

        } else {
            $title = 'Mrs. ';
        }


        $myArray = [
            'fullName' => $row['first_name'] . ' ' . $row['last_name'],
            'validUser' => true,
            'title' => $title
        ];

        $_SESSION["data"] = $myArray;
        header("Location: home.php");

    } else {

        $_SESSION["validUser"] = false;
        header("Location: index.php");

}
/*else {
    header("Location: index.php");
}*/




