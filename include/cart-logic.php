<?php
if (isset($_POST['delete']) ) {
    include 'config.php';
    $id = $_POST['id'];
    $sql = "delete from cart where id = $id";        
    if(mysqli_query($connect,$sql)){  
        echo "deleted";
    }
}
?>