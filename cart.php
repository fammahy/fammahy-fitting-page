<?php
    $title = 'Cart';
    include './include/header.php';
    // include './include/config.php';

    
?>
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <!-- <div class="col align-self-center text-right text-muted">Quantity</div>
                    <div class="col align-self-center text-right text-muted">Price</div> -->
                </div>
            </div>
            <?php
            $user = $_SESSION['userid'];
            $sql= "SELECT  *, cart.id as cart_id, cart.quantity as cart_quantity  FROM `cart` LEFT OUTER JOIN product ON cart.product_id = product.id WHERE cart.user_id = $user";
            $query = mysqli_query($connect,$sql);
            $total=0;
            while ($row = mysqli_fetch_assoc($query)) {
                $cart_id = $row['cart_id'];
                $image = $row['image'];
                $p_name = $row['product_name'];
                $cat = $row['category'];
                $quantity = $row['cart_quantity'];
                $price = $row['price'];
                $total += $row['total'] ;
                $size = $row['size'];
                switch ($row['size']) {
                    case 'sm':  
                        $size = 'Rectangle';
                        break;
                    case 'm':  
                        $size = 'Hourglass';
                        break;
                    case 'sm':  
                        $size = 'Pear';
                        break;
                    case 'sm':  
                        $size = 'Apple';
                        break;
                    default:
                        break;
                }
            ?>                 
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="img/<?php echo $image; ?>"></div>
                    <div class="col">
                        <div class="row text-muted"><?php echo $p_name; ?></div>
                        <div class="row"><?php echo $cat; ?></div>
                        <div class="row text-muted"><?php echo $size; ?></div>
                    </div>
                    <!-- <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div> -->
                    <div class="col">
                    <input type="number" class="form-control" value="<?php echo $quantity; ?>" min="0" style="width:4rem;">
                    </div>
                    <div class="col">£<?php echo $price; ?> </span></div>
                    
                    <input type="hidden" name="" id="input" class="form-control" value="<?php echo $cart_id?>">
                    
                    <div class="col"><span class="close cart-btn" id="s" onclick="deleteItem(this, <?php echo $cart_id?>);">&#10005;</span></div>
                    
                </div>
            </div>
            <?php
            }
            ?>
            <div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">Subtotal</div>
                <div class="col text-right">£<?php echo $total?></div>
            </div>
            <form>
                <!-- // <p>SHIPPING</p>  -->
                <div class="row">
                    <div class="col" style="padding-left:0;">VAT 20%</div>
                    <div class="col text-right">£<?php echo ($total*0.2)?></div>
            </div>
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right" id="total">£<?php echo ($total*1.2); ?></div>
            </div> <a class="btn cart-btn" id="checkout-link" href='checkout.php'>CHECKOUT</a>
        </div>
    </div>
</div>

<style>

    body {
        /* background: #ddd; */
        min-height: 100vh;
        vertical-align: middle;
        /* display: flex; */
        font-family: sans-serif;
        font-size: 0.8rem;
        font-weight: bold
    }

    .title {
        margin-bottom: 5vh
    }

    .card {
        margin: auto;
        margin-top: 30px;
        max-width: 950px;
        width: 90%;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
        border: transparent
    }

    @media(max-width:767px) {
        .card {
            margin: 3vh auto
        }
    }

    .cart {
        background-color: #fff;
        padding: 4vh 5vh;
        border-bottom-left-radius: 1rem;
        border-top-left-radius: 1rem
    }

    @media(max-width:767px) {
        .cart {
            padding: 4vh;
            border-bottom-left-radius: unset;
            border-top-right-radius: 1rem
        }
    }

    .summary {
        background-color: #aa3939;
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        padding: 4vh;
        color: rgb(65, 65, 65);
        color: #fff;
    }

    @media(max-width:767px) {
        .summary {
            border-top-right-radius: unset;
            border-bottom-left-radius: 1rem
        }
    }

    .summary .col-2 {
        padding: 0
    }

    .summary .col-10 {
        padding: 0
    }

    .row {
        margin: 0
    }

    .title b {
        font-size: 1.5rem
    }

    .main {
        margin: 0;
        padding: 2vh 0;
        width: 100%
    }

    .col-2,
    .col {
        padding: 0 1vh
    }

    a {
        padding: 0 1vh
    }

    .close {
        margin-left: auto;
        font-size: 1rem;
        /* border: 1px solid; */
        padding: .5rem;
        border-radius: 500px;
        cursor: pointer;
    }

    img {
        width: 3.5rem
    }

    .back-to-shop {
        margin-top: 4.5rem
    }

    select {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1.5vh 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
        background-color: #ffaaaa;
    }

    input {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
        background-color: #ffaaaa;
    }

    h5 {
        margin-top: 4vh
    }

    hr {
        margin-top: 1.25rem
    }

    form {
        padding: 2vh 0
    }


    a {
        color: black;
        text-decoration:none;
    }


    #code {
        background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: center
    }
</style>



<script>
    function deleteItem(el,id) {
        // document.getElementById('total').innerHTML.replace('£','') * 1
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
        
        var urlencoded = new URLSearchParams();
        urlencoded.append("delete", "true");
        urlencoded.append("id", id);
        
        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
        body: urlencoded,
        redirect: 'follow'
        };
        
        fetch("include/cart-logic.php", requestOptions)
        .then(response => response.text())
        .then(result => {
            if(result == "deleted"){                
                el.parentNode.parentNode.remove();
            }
        })
        .catch(error => console.log('error', error));    
    }
    let link = `/newcheckout.php?price=${document.getElementById('total').innerHTML.replace('£','')}`;
    document.getElementById('checkout-link').setAttribute('href',link)
</script>
<?php
    include './include/footer.php';
?>