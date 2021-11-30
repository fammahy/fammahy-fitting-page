<?php
    include './include/header.php';
    include './include/details-logic.php';
    $title = $product;
?>
    <div class="container bg-white">        
        <div class="row display-container d-none">
            <div class="col-md-4"></div>
            <div class="col-md-4 card border-0">
                <div class="fit-view">
                    <img id="view-img1" src="img/<?php echo $small?>" class="fit-view-img">
                </div>
            </div>
            <div class="col-md-4">
                <a class="btn cart-btn" onclick="addToCart(<?php echo $product?>)">Add to cart</a>
            </div>
        </div>
        <div class="row shadow">    
            <div class="d-none">                
                <label class="avail-label">Available sizes</label>
                <button type="button" class="col btn-outline btn top-padding">Rectangle</button>
                &nbsp;
                <button type="button" class="col btn-outline btn top-padding">Hourglass</button>
                &nbsp;
                <button type="button" class="col btn-outline btn top-padding">Pear</button>
                &nbsp;
                <button type="button" class="col btn-outline btn top-padding">Apple</button>
            </div>            

            <div class="col-md-8">
                <div class="row">                    
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('small')" id="body-size1" value="sm" checked>
                        <label class="form-check-label text-center" for="body-size1">
                            <img class="model-img" src="img/fitted2/small.png" alt="">
                            <hr>
                            Rectangle
                        </label>
                    </div>
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('medium')" id="body-size2" value="m">
                        <label class="form-check-label text-center" for="body-size2">
                            <img class="model-img" src="img/fitted2/medium.png" alt="">
                            <hr>
                            Hourglass
                        </label>
                    </div>
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('large')" id="body-size3" value="l">
                        <label class="form-check-label text-center" for="body-size3">
                            <img class="model-img" src="img/fitted2/large.png" alt="">
                            <hr>
                            Pear
                        </label>
                    </div>
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('x-large')" id="body-size4" value="xl">
                        <label class="form-check-label text-center" for="body-size4">
                            <img class="model-img" src="img/fitted2/x-large.png" alt="">
                            <hr>
                            Apple
                        </label>
                    </div>
                </div>     
            </div>
            <div class="col-md-4">
                <img id="view-img" src="img/<?php echo $small?>" class="fit-view-img">
            </div>   
            
            <div class="row">                
                
                <div class="col-md-10">
                    <label class="avail-label">Description</label>                    
                    <p><?php echo $desc?></p>
                </div>
                
                <div class="col-md-2">
                <?php if (isset($_SESSION['userid']) && $_SESSION['userid']!=''){?>
                    <a class="btn cart-btn" onclick="addToCart(<?php echo $product?>)">Add to cart</a>
                <?php } else { ?>
                    <a class="btn cart-btn" href="login.php">Add to cart</a>
                <?php } ?>
                </div>
                
            </div>
        </div>
    </div>

<script>
    var size = "sm";
    function change(bodysize) {
        let img = document.getElementById('view-img');
        switch (bodysize) {
            case 'small':
                size = "sm";
                img.setAttribute('src',"img/<?php echo $small?>");
                break;
            case 'medium':
                size = "m";
                img.setAttribute('src',"img/<?php echo $medium?>");
                break;
            case 'large':
                size = "l";
                img.setAttribute('src',"img/<?php echo $large?>");
                break;
            case 'x-large':
                size = "xl";
                img.setAttribute('src',"img/<?php echo $xlarge?>");
                break;
        
            default:
                break;
        }
    }
    function addToCart(id) {
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
        
        console.log(size);
        var urlencoded = new URLSearchParams();
        urlencoded.append("cart", "true");
        urlencoded.append("pid", id);
        urlencoded.append("userid", "<?php echo $_SESSION['userid']?>");
        urlencoded.append("quantity", "1");
        urlencoded.append("size", size);
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
        .then(result => document.getElementsByClassName('container')[0].insertAdjacentHTML('afterbegin',result))
        .catch(error => console.log('error', error));
    }                
</script>