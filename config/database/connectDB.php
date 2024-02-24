<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // id21915706_admin
define('DB_PASSWORD', ''); // RP3>t>8]j0cU
define('DB_NAME', 'web'); // id21915706_web

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>