<?php
// 建立資料庫
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tbtodo';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET NAMES 'utf8'");
$conn->query("SET CHARACTER_SET_CLIENT=utf8");
