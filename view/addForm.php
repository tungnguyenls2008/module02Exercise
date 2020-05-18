<?php
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="post" action="../functions/products/add.php">
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
            <div class="col-md-4">
                <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md"
                       required="" type="text">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT PRICE</label>
            <div class="col-md-4">
                <input id="product_name" name="product_price" placeholder="PRODUCT NAME" class="form-control input-md"
                       required="" type="number">

            </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
            <div class="col-md-4">
                <select id="product_categorie" name="product_categorie" class="form-control">
                    <option value="FOOD">FOOD</option>
                    <option value="ELECTRIC">ELECTRIC</option>
                    <option value="BLAH BLAH">BLAH BLAH</option>
                    <option value="BLAH BLAH BLAH">BLAH BLAH BLAH</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
            <div class="col-md-4">
                <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY"
                       class="form-control input-md" required="" type="number">

            </div>
        </div>


        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
            <div class="col-md-4">
                <textarea class="form-control" id="product_description" name="product_description"></textarea>
            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>
            <div class="col-md-4">
                <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md"
                       required="" type="date">

            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">ADD NEW PRODUCT</button>
            </div>
        </div>

    </fieldset>
</form>
