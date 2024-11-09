<?php
$server = "localhost";
$db = "materielinfo";
$user = "root";
$pwd = "";

// $server = "mysql-ziyad.alwaysdata.net";
// $db = "ziyad_materiel_info";
// $user = "ziyad";
// $pwd = "3pDaz1P6";

// BDD connection
$mysqli = new mysqli($server,$user,$pwd,$db);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
?>