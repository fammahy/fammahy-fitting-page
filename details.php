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
            <!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button class="btn btn-outline form-control" onclick="small()"><label>Small</label></button>&nbsp;&nbsp;&nbsp;
        </div> 
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button class="btn btn-outline form-control"><label>Medium</label></button>&nbsp;&nbsp;&nbsp;
        </div>  -->
        <div class="col-sm-2">            
            <label class="btn btn-outline form-control rad" for="small"><input class="d-none" value="small" onchange="setSize()" type="radio" name="size" id="small">Small</label>
        </div> 
        <?php if($_GET['cat'] == 'tall'){?>
        <div class="col-sm-2">            
            <label class="btn btn-outline form-control rad" for="medium"><input class="d-none" value="medium" onchange="setSize()" type="radio" name="size" id="medium">Medium</label>
        </div> 
        <div class="col-sm-2 p-20">            
            <label class="btn btn-outline form-control rad" for="large"><input class="d-none" value="large" onchange="setSize()" type="radio" name="size" id="large">Large</label>
        </div> 
        <?php } ?>
        <!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button class="btn btn-outline form-control"><label>Large</label></button>&nbsp;&nbsp;&nbsp;
        </div> </div>  -->

                <div class="row">                    
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('small')" id="body-size1" value="sm" checked>
                        <label class="form-check-label text-center" for="body-size1">
                            <img id="rect-img" class="model-img" src="img/<?php echo $_GET['cat']?>/small/rectangle.png" alt="">
                            <hr>
                            Rectangle
                        </label>
                    </div>
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('medium')" id="body-size2" value="m">
                        <label class="form-check-label text-center" for="body-size2">
                            <img id="hour-img" class="model-img" src="img/<?php echo $_GET['cat']?>/small/hourglass.png" alt="">
                            <hr>
                            Hourglass
                        </label>
                    </div>
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('large')" id="body-size3" value="l">
                        <label class="form-check-label text-center" for="body-size3">
                            <img id="pear-img" class="model-img" src="img/<?php echo $_GET['cat']?>/small/pear.png" alt="">
                            <hr>
                            Pear
                        </label>
                    </div>
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" onclick="change('x-large')" id="body-size4" value="xl">
                        <label class="form-check-label text-center" for="body-size4">
                            <img id="apple-img" class="model-img" src="img/<?php echo $_GET['cat']?>/small/apple.png" alt="">
                            <hr>
                            Apple
                        </label>
                    </div>
                </div>     
                <div class="form-check col-md-12">
        <div class="row">
            
            <div class="col-md-12">
                <label class="avail-label">SIZE CHART</label>  
        <img class="full" src="img/chart.png" >
   
            </div>
            <div class="col-md-6 custom">  
    <h3 class="text-center">Customization Toolbar</h3>              
    <div class="form-group">
        <label for="name">Bust</label>
    <input type="number" class="form-control" id="name" name="name" required>
    </div> 
    <div class="form-group">
        <label for="name">Waist</label>
        <input type="number" class="form-control" id="name" name="name" required>
    </div> 
    <div class="form-group">
        <label for="name">Hips</label>
        <input type="number" class="form-control" id="name" name="name" required>
    </div> 
    <button class="cart-btn btn form-control">Save</button>
</div>

        </div>
        

            </div>    
            
        </div>
    </div>
    <!-- <div class="form-check col-md-12">
        <div class="row">
            
            <div class="col-md-8">
                <label class="avail-label">SIZE CHART</label>  
        <img class="full" src="img/chart.png" >
   
            </div>
            <div class="col-md-4 custom">  
    <h3 class="text-center">Customize</h3>              
    <div class="form-group">
        <label for="name">Bust</label>
    <input type="number" class="form-control" id="name" name="name" required>
    </div> 
    <div class="form-group">
        <label for="name">Waist</label>
        <input type="number" class="form-control" id="name" name="name" required>
    </div> 
    <div class="form-group">
        <label for="name">Hips</label>
        <input type="number" class="form-control" id="name" name="name" required>
    </div> 
    <button class="cart-btn btn form-control">Save</button>
</div>

        </div> -->
        

    <div class="col-md-4">
        <img id="view-img" src="img/fitted <?php echo $_GET['cat']?>/small/rectangle.png" class="fit-view-img">
    </div>   
    
                
            <div class="row">                
                
                <div class="col-md-10">
                    <!-- <label class="avail-label"><?php echo $_GET['cat']?></label>                     -->
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

    </div>
    
    <script>
         document.getElementById('small').checked = true
        var size = "sm";
        function change(bodysize) {
        let img = document.getElementById('view-img');
        let check = document.querySelector('input[name="size"]:checked').value;
        
        // console.log(dir);
        switch (bodysize) {
            case 'small':
                size = "sm";
                img.setAttribute('src',`img/fitted <?php echo $_GET['cat']?>/${check}/rectangle.png`);
                break;
                case 'medium':
                    size = "m";
                    img.setAttribute('src',`img/fitted <?php echo $_GET['cat']?>/${check}/hourglass.png`);
                    break;
                case 'large':
                    size = "l";
                    img.setAttribute('src',`img/fitted <?php echo $_GET['cat']?>/${check}/pear.png`);
                    break;
                case 'x-large':
                    size = "xl";
                    img.setAttribute('src',`img/fitted <?php echo $_GET['cat']?>/${check}/apple.png`);
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
    // function change() {
    //     let size = document.querySelector('input[name="size"]:checked');

    // }    
    function setSize() {
        let sizeCheck = document.querySelector('input[name="body-size"]');
        let check = document.querySelector('input[name="size"]:checked');
        let sizes = document.getElementsByName('size');
        for (let i = 0; i < sizes.length; i++) {
            const el = sizes[i].parentNode;
            el.classList.remove('check');
            if (sizes[i] == check) {
                el.classList.add('check');
            }
        }
        // console.log(check.value);
        document.getElementById("rect-img").setAttribute('src',"img/<?php echo $_GET['cat']?>/"+check.value+"/rectangle.png");
        document.getElementById("hour-img").setAttribute('src',"img/<?php echo $_GET['cat']?>/"+check.value+"/hourglass.png");
        document.getElementById("pear-img").setAttribute('src',"img/<?php echo $_GET['cat']?>/"+check.value+"/pear.png");
        document.getElementById("apple-img").setAttribute('src',"img/<?php echo $_GET['cat']?>/"+check.value+"/apple.png");

        // for (let i = 0; i < sizeCheck.length; i++) {
        //     const el = sizeCheck[i];
        //     let path = el[i].getAttribute('src').split('/');
        //     let src = `img/<?php echo $_GET['cat']?>/${check.value}/${path[0]}`;
        //     console.log(src);
        //     el[i].setAttribute('scr',src);
        // }
    }
</script>
<style>
    .p-20{
        padding-bottom:20px;
    }
    .fit-view-img{
        max-height:70vh
    }
    .custom{
        border: 1px solid #d46a6a;
        border-radius:4px;
        padding:20px;
        margin-top:20px;
    }
    .full{
        max-width:100%;
    }
    .check{
        border:2px solid black !important;
    }
</style>