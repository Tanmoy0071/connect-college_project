<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./client/commonFIles.php') ?>
</head>
<body>
    <?php 
    error_reporting(E_ERROR | E_PARSE);
error_reporting(0);
session_start();
    session_start();

    include('./client/header.php');

    if(isset($_GET['signup']) && !$_SESSION['user']['username'])
    {
        include('./client/signup.php');
    }else if(isset($_GET['login']) && !$_SESSION['user']['username'])
    {
        include('./client/login.php');
    }else{
        //
    }
    ?>
</body>
</html>