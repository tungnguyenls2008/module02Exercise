<?php
session_start();
require '../connection/conn.php'; ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<form method="post">
    <input type="text" name="keyword" placeholder="search"
           value="<?php echo (isset($_POST['keyword'])) ? $_POST['keyword'] : '' ?>">
    <input type="submit" name="search" value="SEARCH">
    <?php if (isset($_POST['search'])) {
        $keyword = $_REQUEST['keyword'];
        $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$keyword%' OR `description` LIKE '%$keyword%'";
        $query = $conn->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

    } ?>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1">
                    <div class="table100-firstcol">
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">Products</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

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
                                    </tr><?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>