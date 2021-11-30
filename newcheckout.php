<?php
    include './include/header.php';
    $title = 'checkout';
?>
<script>
    function pay() {
        let text = document.getElementById('btn-text');
        let load = document.getElementById('btn-load');
        let btn = document.getElementById('btn');

        text.innerHTML = 'Processing';
        load.classList.remove('d-none');
        btn.setAttribute("disabled", "");
        window.setTimeout(function(){
            load.classList.add('d-none');
            text.innerHTML ='Pay';  
            btn.removeAttribute('disabled');
            alert('Thank you for shoping with us :)');
            window.location.replace("/index.php");
        },2000);

    }
</script>
<form id="form">
<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 shadow bg-white">
            
            <div class="row">
                <img src="img/card-logo.png" alt="visa and mastercard logos" class="thumbnail col">
                <label for="" class="text-right col"><strong><?php echo $_SESSION['user.name']?></strong></label>
                <label for="" class="text-right">£<?php echo $_GET['price']?></label>
            </div>
            
            <div class="row">                
                <div class="form-group col-sm-12 p-20 ">
                    <label for="">Card Holder's Name</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Gabrielle Bonheur" required>
                </div>            
            </div>
            <div class="row">                
                <div class="form-group col-sm-12 p-20 ">
                    <label for="">Card Number</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="0000 0000 0000 0000 0000" required>
                </div>            
            </div>
            <div class="row">
                <div class="form-group col-sm-12 p-20 ">
                    <label for="">Delivery Date</label>
                    <input type="date" name="email" id="email" class="form-control" min="<?php echo date('Y-m-d');?>" defaultValue="<?php echo date('Y-m-d');?>" required>
                </div>            
            </div>
            <div class="row">                
                <div class="form-group col-sm-4 p-20">
                    <label for="">Expiry Date</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="09/23" required>
                </div>            
                <div class="col-sm-5"></div>   
                <div class="form-group col-sm-3 p-20">
                    <label for="">CVV</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="222" required>
                </div>         
            </div>
            <div class="row p-20">
                <button type="submit" class="cart-btn btn"  id="btn">
                    <span id="btn-load" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                    <label id="btn-text">Pay </label>
                </button>
            </div>
        </div>
    </div>
    </form>
<style>
    .p-20{
        padding: 10px;
    }
    .m-20{
        margin:20px;
    }
    .thumbnail{
        max-width: 100px;
        border:0;
    }
    .border-red{
        border: 1px solid red !important;
    }
    .border-black{
        border: 1px solid #00000055 !important;
    }
    
</style>
<script>
    document.getElementById("btn").addEventListener("click", function(event){
        event.preventDefault();
        let k = document.getElementById('form').querySelectorAll("[required]");
        let count = 0;
        for (const el of k ) {
            if (el.value == "") {
                el.classList.add('border-red');
                count++;
            }
            else{
                el.classList.add('border-black');
            }
        }
        if(count==0){
            pay();
        }
    });
</script>