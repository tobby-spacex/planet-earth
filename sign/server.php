<?php
session_start();
require('../config/db.php');
// $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$username = "";
$email = "";
$errors = array();

//if the register button is clecked
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    //ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, "Username is requires");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2){
        array_push($errors, "The passwords do not match");
    }

    //if there are no errors, save user to database
    if(count($errors) == 0){
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php'); //redirect to home page
    }
}


    //log user in from login page
    if(isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Username is requires");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                //log user in
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php'); //redirect to home page
            }else{
                array_push($errors, "Login or password is incorrect");
            }
        }

    }








    //logout
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }