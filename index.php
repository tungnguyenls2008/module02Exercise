<?php
require 'connection/conn.php';
session_start();
$sql = "SELECT * FROM `products`";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRODUCT MANAGER</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<h1>PRODUCT MANAGER</h1>
<div class="limiter">

    <div class="table100 ver1">


        <div class="wrap-table100-nextcols js-pscroll">
            <div class="table100-nextcols">
                <table>
                    <thead>
                    <tr class="row100 head">
                        <th class="cell100 column2">#</th>
                        <th class="cell100 column2">Product ID</th>
                        <th class="cell100 column3">Product name</th>
                        <th class="cell100 column4">Category</th>
                        <th class="cell100 column5">Price</th>
                        <th class="cell100 column6">Quantity</th>
                        <th class="cell100 column7">Day of receive</th>
                        <th class="cell100 column8">Description</th>
                        <th class="cell100 column8">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($results as $key => $item): ?>
                        <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['category'] ?></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['quantity'] ?></td>
                        <td><?php echo $item['day_of_recieve'] ?></td>
                        <td><?php echo $item['description'] ?></td>
                        <td><a href="functions/products/delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">DELETE</a>
                            <a href="view/editForm.php?id=<?php echo $item['id'] ?>" class="btn btn-warning">EDIT</a>
                        </td>
                        </tr><?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div><a href="view/addForm.php" class="btn btn-outline-primary">ADD NEW PRODUCT</a>
    <a href="view/searchForm.php" class="btn btn-outline-primary">SEARCH PRODUCT</a></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function () {
        var ps = new PerfectScrollbar(this);

        $(window).on('resize', function () {
            ps.update();
        })

        $(this).on('ps-x-reach-start', function () {
            $(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
        });

        $(this).on('ps-scroll-x', function () {
            $(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
        });

    });


</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>