<?php
    $title = 'Add';
    include './include/header.php';
    include './include/config.php';


    if (isset($_POST['upload']) ) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $image = $_FILES['image1']['tmp_name'];
        var_dump($image);
        //$realImage = base64_decode($image);
        $pickname = time().'.png';
    
        // file_put_contents('img/' . $pickname, $image);
        move_uploaded_file($image,'img/' . $pickname);
        $sql = "insert into product(product_name,price,quantity,category,image) values('$name',$price,$quantity,'$category','$pickname')";
        // echo $sql;
        if(mysqli_query($connect,$sql)){
            
            $MSG = 'Data Successfully Submitted.';
            
            $json = json_encode($MSG);
            
            echo $json ;
        }
        else {
            echo $sql;
        }
    }
        
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
                <input type="file" class="form-control" name="image1" id="image1">
            </div>            
            <div class="form-group">
                <label for="">Small</label>
                <input type="file" class="form-control" id="" name="small">
            </div>            
            <div class="form-group">
                <label for="">Medium</label>
                <input type="file" class="form-control" id="" name="medium">
            </div>            
            <div class="form-group">
                <label for="">Large</label>
                <input type="file" class="form-control" id="" name="large">
            </div>            
            <div class="form-group">
                <label for="">X Large</label>
                <input type="file" class="form-control" id="" name="x-large">
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