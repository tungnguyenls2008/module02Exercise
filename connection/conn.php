<?php
require '/var/www/html/config.php';
$db_username = 'root';
$db_password = PASSWORD;
$conn = new PDO('mysql:host=localhost;dbname=market_manager', $db_username, $db_password);
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}
