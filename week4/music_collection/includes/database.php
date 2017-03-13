<?php
$host = "localhost";
$database = "php_period2";
$user = "root";
$password = "root";

$db = mysqli_connect($host, $user, $password, $database) or die("Error: " . mysqli_connect_error());;
