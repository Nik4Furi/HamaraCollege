<?php
//connecting the database and localhost
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "hamaracollege";
$conn = mysqli_connect($server,$username,$password,$dbname);

// check the connectivity 
if (!$conn) {
    die("Your connection is not connect");
}
?>