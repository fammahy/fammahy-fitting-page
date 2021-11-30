<?php
    $title = 'Home';
    include './include/header.php';
    // include './include/config.php';
    
    ?>
    <script>
    function addToCart(id) {
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
    
        var urlencoded = new URLSearchParams();
        urlencoded.append("cart", "true");
        urlencoded.append("pid", id);
        urlencoded.append("userid", "<?php echo $_SESSION['userid']?>");
        urlencoded.append("quantity", "1");
        urlencoded.append("size", "<?php echo $_SESSION['user.size']?>");
        // urlencoded.append("price", "100");
        // urlencoded.append("total", "100");
    
        var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: urlencoded,
        redirect: 'follow'
        };
    
        fetch("include/details-logic.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
    }                
    </script>
    <div style="max-width: 99vw; /*padding-left:0.5vw!important*/">        
    <header><h1 class="text-center">Products</h1></header>
    <div class="row category">            
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">                            
            <button class="btn btn-outline form-control"><img src="" class="button-thumb"><label>All</label></button>&nbsp;&nbsp;&nbsp;
        </div>
        
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">                            
            <button class="btn btn-outline form-control"><img src="img\dress-removebg-preview.png" class="button-thumb"><label>Summer Dresses</label></button>&nbsp;&nbsp;&nbsp;
        </div>
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button class="btn btn-outline form-control"><img src="img\ball.png" class="button-thumb"><label>ball gown</label></button>&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button class="btn btn-outline form-control"><img src="img\jean.png"class="button-thumb"><label>Jeans</label></button>&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button class="btn btn-outline form-control"><img src="img\skirt-removebg-preview.png" class="button-thumb"><label>Skirt</label></button>&nbsp;&nbsp;&nbsp;
        </div>            
    </div>
    <div class="row"> 
    <?php

    $sql=mysqli_query($connect,"select * from product");
    while($data =mysqli_fetch_array($sql)){
        
    ?>
    <div class="col-md-2">
            <div class="card">
                <img src="img/<?php echo $data['image']; ?>" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <a class="btn cart-btn" href="details.php?p=<?php echo $data['id']; ?>">Try on</a>
                    <?php if (isset($_SESSION['userid']) && $_SESSION['userid']!=''){?>
                        <button class="btn btn-outline" onclick="addToCart(<?php echo $data['id']; ?>)">Add to cart</button>
                        
                    <?php } else { ?>
                        <a class="btn btn-outline" href="login.php">Add to cart</a>
                    <?php } ?>

                    
                </div>
            </div>
        </div>           
            <?php
}
            ?>
    </div>
<?php
    include './include/footer.php';
?>