<?php
session_start();
require_once '../../connection/conn.php';
if (isset($_POST['singlebutton'])) {
    if ($_POST['product_name'] != "" || $_POST['product_categorie'] != "" || $_POST['available_quantity'] != "" || $_POST['product_description'] != "" || $_POST['online_date'] != "") {
        try {
            $product_name = $_POST['product_name'];
            $product_categorie = $_POST['product_categorie'];
            $product_price = $_POST['product_price'];
            $available_quantity = $_POST['available_quantity'];
            $product_description = $_POST['product_description'];
            $online_date = $_POST['online_date'];
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `products` (`id`,`name`,`category`, `price`, `quantity`, `day_of_recieve`, `description`) VALUES (NULL,'$product_name','$product_categorie','$product_price','$available_quantity','$online_date','$product_description') ";
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $conn = null;
        header('location:../../index.php');
    } else {
        echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = '../../view/user/registration.php'</script>
			";
    }
}
