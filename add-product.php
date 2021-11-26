<?php
    $title = 'Add';
    include './include/header.php';
    include './include/add-product-logic.php';


?>


<form action="add-product.php" method="POST" role="form" enctype="multipart/form-data">    
    <h3 class="text-center">Add Product</h3>
    <div class="row">
        
        <div class="col-md-2">
            
        </div>
        
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" id="" placeholder="Name">
            </div>            
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" id="" placeholder="Price">
            </div>            
            <div class="form-group">
                <label for="">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="" placeholder="Quantity">
            </div>            
            <div class="form-group">
                <label for="">Category</label>
                <input type="text" name="category" class="form-control" id="" placeholder="Category">
            </div>            
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control" id="" placeholder="Description">
            </div>            
        </div>            
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Dress</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>            
            <div class="form-group">
                <label for="">Rectangle</label>
                <input type="file" class="form-control" id="small" name="small">
            </div>            
            <div class="form-group">
                <label for="">Hourglass</label>
                <input type="file" class="form-control" id="meduim" name="meduim">
            </div>            
            <div class="form-group">
                <label for="">Pear</label>
                <input type="file" class="form-control" id="large" name="large">
            </div>            
            <div class="form-group">
                <label for="">Apple</label>
                <input type="file" class="form-control" id="xlarge" name="xlarge">
            </div>            
            <button type="submit" class="btn cart-btn" name="upload">Submit</button>
        </div>
        
    </div>
</form>

<style>
    .form-group{
        margin-bottom: 15px;
    }
</style>