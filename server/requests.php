<?php

session_start();
include("../common/db.php");

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $user = $conn->prepare("INSERT INTO users (username, email, password, address) VALUES (?, ?, ?, ?)");

    if ($user === false) {
        die("Prepare failed: " . $conn->error);
    }

    $user->bind_param("ssss", $username, $email, $password, $address);

    $result = $user->execute();

    if ($result) {
        echo "New user registered";
        $_SESSION["user"] = ["username"=>$username,"email"=>$email];
        header("location: /connect");
    } else {
        echo "New user not registered: " . $conn->error;
    }

    $user->close();
}else if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username="";
    echo $query = "select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);
     if ($result->num_rows==1) {

        foreach($result as $row){
            $username = $row['username'];
        }
        // echo $username;
        // echo "New user registered";
        $_SESSION["user"] = ["username"=>$username,"email"=>$email];
        header("location: /connect");
    } else {
        echo "New user not registered: " . $conn->error;
    }
    echo $result->num_rows;
}else if(isset($_GET['logout'])){
    session_unset();
    header("location: /connect");
}
?>
