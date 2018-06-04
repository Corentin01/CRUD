<?php


$host       = "localhost";
$username   = "root";
$password   = "lulu";
$dbname     = "Ninja";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);