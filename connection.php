<?php
$servername = "localhost"; //replace it with your database server name
$username = "id107527_db_client2omar";  //replace it with your database username
$password = "1o-2m-3a-4r";  //replace it with your database password
$dbname = "id107527_db_client2";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>