<?php
session_start();
require_once '../../connection/conn.php';
if (isset($_POST['singlebutton'])) {
    try {
        $product_id = $_REQUEST['id'];
        $product_name = $_POST['product_name'];
        $product_categorie = $_POST['product_categorie'];
        $product_price = $_POST['product_price'];
        $available_quantity = $_POST['available_quantity'];
        $product_description = $_POST['product_description'];
        $online_date = $_POST['online_date'];
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `products` SET `name`=?,`category`=?, `price`=?, `quantity`=?, `day_of_recieve`=?, `description`=? WHERE `id`=?";
        $query = $conn->prepare($sql);
        $query->bindParam(1, $_POST['product_name']);
        $query->bindParam(2, $_POST['product_categorie']);
        $query->bindParam(3, $_POST['product_price']);
        $query->bindParam(4, $_POST['available_quantity']);
        $query->bindParam(5, $_POST['online_date']);
        $query->bindParam(6, $_POST['product_description']);
        $query->bindParam(7, $product_id);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    header('location:../../index.php');

}
