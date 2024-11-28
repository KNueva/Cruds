<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angkols";

$conn  = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connectrion failed". mysqli_connect_error());
}
//echo "Connected successfully";
