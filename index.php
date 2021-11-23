<?php
    $title = 'Home';
    include './include/header.php';
?>
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
        <div class="col-md-2">
            <div class="card">
                <img src="img/maroon.png" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <a class="btn cart-btn" href="details.php?p=maroon">Try on</a>
                    <button class="btn btn-outline">add to cart</button>
                    
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img\show_1.png" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <a class="btn cart-btn" href="details.html">Try on</a>
                    <button class="btn btn-outline">add to cart</button>
                    
                </div>
            </div>
            <!-- <hr> -->
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img\black-gingham-shirred-square-neck-blouse.jpg" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a class="btn cart-btn" href="details.html">Try on</a>
                    <button class="btn btn-outline">add to cart</button>
                    
                </div>
            </div>
            <!-- <hr> -->
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img\images (7).jpg" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a class="btn cart-btn" href="details.html">Try on</a>
                    <button class="btn btn-outline">add to cart</button>
                    
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img\images (1).jpg" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a class="btn cart-btn" href="details.html">Try on</a>
                    <button class="btn btn-outline">add to cart</button>
                    
                </div>
            </div>
            <!-- <hr> -->
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img\images.jpg" class="card-img-top show" alt="...">
                <div class="card-body row">
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a class="btn cart-btn" href="details.html">Try on</a>
                    <button class="btn btn-outline">add to cart</button>
                    
                </div>
            </div>
            <!-- <hr> -->
        </div>
    </div>
<?php
    include './include/footer.php';
?>