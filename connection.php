<?php

$host = 'localhost';
$username = "root";
$password = "";
$db_name = "itemsforsale";
$table = "items for sale";

$conn = new mysqli($host, $username, $password, $db_name);

if (!isset($all_product)) {
    // SQL query
    $sql = "SELECT * FROM `$table`"; // Table name enclosed in backticks
    $all_product = $conn->query($sql);
}