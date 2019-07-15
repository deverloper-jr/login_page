<?php
//use model\dbConnection;

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$db = new \model\dbConnection();

// ok guys , idk what is happend
// it doesnt work as it expected , u may continue with ur nex task, later we can figure it out
// let me push
$db = $db->connect();
//$result = mysqli_connect("localhost", "root","", "my_db" );

$result = mysqli_query($db,"select * from user where (email = '$email' or username = '$email')  and password = '$password'");

var_dump($result);
die;

$row = mysqli_fetch_assoc($result);

/*if ($email != "" && $password != ""){*/
    if ($row){  //($row['email'] == $email or $row['username'] == $email && $row['password'] == $password) { //if($row)


        if ($row['gender'] === 'm') {
            $title = 'Mr. ';

        } else {
            $title = 'Mrs. ';
        }


        $myArray = [
            'id' => $row['id'],
            'firstname' => $row['first_name'],
            'lastname' => $row['last_name'],
            'gender' =>$row['gender'],
            'email' => $row['email'],
            'username' => $row['username'],
            'password' => $row ['password'],
            'fullName' => $row['first_name'] . ' ' . $row['last_name'],
            'validUser' => true,
            'title' => $title,

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




