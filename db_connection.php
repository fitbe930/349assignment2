<?php
$dbhost = 'db.cgmjlbiqninb.us-east-1.rds.amazonaws.com';
$dbuser = "user";
$dbpass = "password";
$dbname = "studs";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}