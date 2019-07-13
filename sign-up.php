<?php
require ('conn.php');
$result;

if (isset($_POST['new'])) {

    $fn = $_POST['name'];
    $ln = $_POST['last'];
    $gn = $_POST['gender'];
    $un = $_POST['username'];
    $em = $_POST['email'];
    $pw = $_POST['password'];

 mysqli_query($result,"INSERT INTO user(first_name, last_name, gender, username, email, password) values ('$fn','$ln','$gn','$un','$em','$pw')");
    echo "query inserted";
}

?>
<div class="container">

<div class="row">

    <div class="col-md-6 col-md-offset-3">

        <div class="box">

        <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3>

        <form action="sign-up.php" method="POST">

        <label for="firstname">Firstname</label>

        <input type="text" id="firstname" name="name" class="form-control" required><br>

        <label for="lastname">Lastname</label>

        <input type="text" name="last" id="lastname" class="form-control" required><br>

        <label for="gender">Male</label>

        <input type="radio" name="gender" id="gender" value="m" class="form-control" checked required>
            <label for="gender">female</label>
        <input type="radio" name="gender" id="gender" value="f" class="form-control" required><br>



        <label for="username">username</label>

       <input type="text" id="username" name="username" class="form-control" required><br>

        <label for="email">email</label>

        <input type="email" name="email" id="email" class="form-control" required><br>

         <label for="password">password</label>

         <input type="password" name="password" id="password" class="form-control" required><br>

        <br>

        <input type="submit" name="new" class="btn btn-success" >

        </form>

    </div>

    </div>

    </div>

</div>


