<?php
    include './include/header.php';
    include './include/details-logic.php';
    $title = $product;
?>
    <div class="container">        
        <div class="row display-container">
            <div class="col-md-4"></div>
            <div class="col-md-4 card border-0">
                <div class="fit-view">
                    <img id="view-img" src="img/<?php echo $small?>" class="fit-view-img">
                </div>
            </div>
            <div class="col-md-4">
                <a class="btn cart-btn" onclick="addToCart(<?php echo $product?>)">Add to cart</a>
            </div>
        </div>
        <div class="row shadow">                
            <label class="avail-label">Available sizes</label>
            <button type="button" class="col btn-outline btn top-padding" onclick="change('small')">Rectangle</button>
            &nbsp;
            <button type="button" class="col btn-outline btn top-padding" onclick="change('medium')">Hourglass</button>
            &nbsp;
            <button type="button" class="col btn-outline btn top-padding" onclick="change('large')">Pear</button>
            &nbsp;
            <button type="button" class="col btn-outline btn top-padding" onclick="change('x-large')">Apple</button>

            <label class="avail-label">Description</label>
            <p><?php echo $desc?></p>
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