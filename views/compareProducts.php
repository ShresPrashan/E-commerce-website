<?php
session_start();
include(__DIR__ . "/../components/Navbar.php");
include "../index.php";
require_once(__DIR__ . "/../api/products.php");
$products = getProducts(); ?>
<br>
<h5 style="text-align:center"> Search and Compare products </h5>

<table class="table table-striped" id="product_table">
    <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Image</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($products)) {
        ?>

        <tr>

            <?php
                echo "<td><p>" . $row['product_id'] . "</p></td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_category'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td>" . $row['product_Description'] . "</td>";
                echo '<td><img src="' . $row['product_img'] . '" class="rounded" style="width:48px;height:48px;" alt=".." /></td>';

               
                ?>

        </tr>
        <?php } ?>


    </tbody>
</table>


<!-- modal container -->


<div class="modal fade" id="add-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../api/products.php" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="product_Name">Product Name</label>
                        <input type="text" class="form-control" name="productName" placeholder="Product name">
                    </div>
                    <div class="form-group">
                        <label for="product_Category">Product Category</label>
                        <input type="text" class="form-control" name="productCategory" placeholder="Product Category">
                    </div>
                    <div class="form-group">
                        <label for="product_Price">Product Price</label>
                        <input type="number" class="form-control" name="productPrice" placeholder="Product Price">
                    </div>
                    <div class="form-group">
                        <label for="product_Description">Product Description</label>
                        <input type="text" class="form-control" name="productDescription" placeholder="Product Description">
                    </div>
                    <div class="form-group">
                        <label for="product_Img">Product Img</label>
                        <input type="text" class="form-control" name="productImg" placeholder="Product Image Url">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="saveBtn" class="btn btn-primary">Save Product</button>
                </div>
        </div>

        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#product_table').DataTable();
});
</script>