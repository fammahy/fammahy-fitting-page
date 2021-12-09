<?php
if (isset($_POST['delete']) ) {
    include 'config.php';
    $id = $_POST['id'];
    $sql = "delete from cart where id = $id";        
    if(mysqli_query($connect,$sql)){  
        echo "deleted";
    }
}
if (isset($_POST['pay'])) {
    include 'config.php';
    $id = $_POST['userid'];
    $insert = "INSERT INTO `transaction`(product_id,user_id,quantity,total,size) SELECT product_id,user_id,quantity,total,size FROM `cart` WHERE user_id = $id;";
    $delete = "DELETE FROM cart WHERE user_id = $id;";
    // echo $sql;
    // mysqli_begin_transaction($connect, MYSQLI_TRANS_START_READ_ONLY);
    if(mysqli_query($connect,$insert)){
        if(mysqli_query($connect,$delete)){
            echo "Payed";
        }
    }
}
?>