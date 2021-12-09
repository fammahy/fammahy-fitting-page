<?php 


if (isset($_POST['cart']) ) {    
    include 'config.php';

    $pid = $_POST['pid'];
    $userid = $_POST['userid'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $price = 0;
    $sql = "SELECT * FROM product WHERE id='$pid'";
    $query = mysqli_query($connect,$sql);
    if ($row = mysqli_fetch_assoc($query)) {
        $price = $row['price'];
        $name = $row['product_name'];
    }
    $total = $quantity * $price;
    $sql = "insert into cart(product_id,user_id,quantity,size,price,total) values('$pid','$userid','$quantity','$size','$price','$total')";
    if(mysqli_query($connect,$sql)){
        echo "<div class='alert alert-success' role='alert' style='margin:20px 20px 0 20px;'>
        Added $name to cart :)
        </div>";        
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
        Unable add item to cart. Try again later :(
            </div>';
        }
    }
    
    if (isset($_GET['p']) ) {    
        $product = $_GET['p'];
    //     $table = $_GET['cat'];
        
    //     $sql = "SELECT * FROM $table WHERE id='$product'";
    //     $query = mysqli_query($connect,$sql);
    //     if ($row = mysqli_fetch_assoc($query)) {
    //         $small_rectangle = $row['small_rectangle'];
    //         $small_apple = $row['small_apple'];
    //         $small_pear = $row['small_pear'];
    //         $small_hourglass = $row['small_hourglass'];
    //         $medium_rectangle = $row['medium_rectangle'];
    //         $medium_apple = $row['medium_apple'];
    //         $medium_pear = $row['medium_pear'];
    //         $medium_hourglass = $row['medium_hourglass'];
    //         $large_rectangle = $row['large_rectangle'];
    //         $large_apple = $row['large_apple'];
    //         $large_pear = $row['large_pear'];
    //         $large_hourglass = $row['large_hourglass'];
    //         // $xlarge = $row['size4'];
    //         // $desc = $row['description'];
    //         // echo $small;
    //     }
    //     else {
    //     }
    //     // $sql = "SELECT * FROM product_details WHERE product_id='$product'";
        // $query = mysqli_query($connect,$sql);
        // if ($row = mysqli_fetch_assoc($query)) {
        //     $small = $row['size1'];
        //     $medium = $row['size2'];
        //     $large = $row['size3'];
        //     $xlarge = $row['size4'];
        //     $desc = $row['description'];
        //     // echo $small;
        // }
        // else {
        // }

}
    ?>