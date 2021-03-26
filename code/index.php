<?php 
echo "Hello World";
$mysqli = new mysqli("172.21.0.4:3306", "admin", "admin", "myDB");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";