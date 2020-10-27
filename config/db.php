<?php
include('config.php');

// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', 'root');
// define('DB_NAME', 'myearth');

// define('SITE_LOGO', 'Planet Earth');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()){
    echo 'Failed conntection ' .mysqli_connect_errno();

}