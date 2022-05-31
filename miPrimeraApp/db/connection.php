<?php
require_once 'pdoconfig.php';
$connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password, $options);