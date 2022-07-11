<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

$mydatabase = 'MYSQL_DATABASE';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $mydatabase);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
// 	header("location: main.php");
// }
// ?>