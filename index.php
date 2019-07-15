<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>index page</title>

</head>
<body>
<div class="container  col-3 "  style="margin-top: 90px" >
    <div class="text-center">
        <img src="1.png" alt="bootstrap" class="mb-4" width="72" height="72">
    </div>
    <caption>
        <h2 class=" h3 mb-3 font-weight-normal text-center"> Please sign in</h2>
    </caption>
    <form action="connection.php" method="post" class="col" >
        <div class="from-group align-self-center col;">
            <label class="sr-only">email</label>
            <input  name="email" id="email" placeholder="Email address" class="form-control" required autofocus>
        </div>

        <div class="from-group align-self-center col;"  >
            <label class="sr-only text-sm-center">pass</label>
            <input type="password"  name="password" id="password"  placeholder="Password" class="form-control" required>
        </div> <br/>


        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" style="margin-top: 30px" >Sign in</button><br/>
        <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
    </form>
    <?php
    if (array_key_exists('data',$_SESSION) && $_SESSION['data']['validUser']==false){
        echo "your email or password is incorrect"; }
    if(array_key_exists('deleteUserSuccess',$_SESSION) &&  $_SESSION['deleteUserSuccess'] ){
    echo "Record deleted successfully";
    unset($_SESSION['deleteUserSuccess']); }
    if(array_key_exists('accountCreated',$_SESSION) &&  $_SESSION['accountCreated'] ){
        echo "Your account has been created";
        unset($_SESSION['accountCreated']); }
    ?>
</div>
</body>
</html>