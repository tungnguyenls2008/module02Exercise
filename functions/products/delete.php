<?php
session_start();
require_once '../../connection/conn.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `products` WHERE `products`.`id` ='$id' ";
$query = $conn->prepare($sql);
$query->execute();

header('Location: ../../index.php');


