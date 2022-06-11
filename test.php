<?php
$servername = "localhost";
$username = "agile";
$password = "0kRi1hiUM6wdtF";
$database = "TimboTronics";

$connection = new mysqli($servername, $username, $password, $database);

$result = $connection->query("INSERT INTO `User`(`userId`, `username`, `passwordHash`, `lastActivity`, `firstName`, `lastName`) VALUES ('test','something','1900-01-01','Test','test')");