<?php
// echo "This is connectivity page<br>";

//connecting the database and localhost
//Variable Declaration
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "eca";
$conn = mysqli_connect($server,$username,$password,$dbname);

// check the connectivity 
if (!$conn) {
    die("Your connection is not connect");
}
else{
    // echo "<h1>Your connection connected</h1> ";
}

?>