<?php
    $title = 'Register';
    include './include/header.php';
    include './include/config.php';

    
?>
<form action="login.php" method="POST" role="form">    
    <div class="row padding-10">
        
        <div class="col-md-1">
            
        </div>
        <div class="col-md-12 shadow">  
            
            <div class="row">                
                
                <div class="col-md-4">
                <h3 class="text-center">Register</h3>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Gabrielle Bonheur" required>
                </div> 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="" id="email" class="form-control" placeholder="someone@example.com" required>
                </div>            
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div> 
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="07871-274854" required>
                </div> 
                <button type="submit" class="btn cart-btn form-control" name="upload">Register</button>
            </div>   
            <div class="col-md-8">
                
                
                <div class="row">
                    
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" id="body-size1" value="small" checked>
                    <label class="form-check-label text-center" for="body-size1">
                        <img class="model-img" src="img/fitted2/small.png" alt="">
                        <hr>
                        Small
                    </label>
                </div>
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="body-size" id="body-size2" value="medium">
                    <label class="form-check-label text-center" for="body-size2">
                        <img class="model-img" src="img/fitted2/medium.png" alt="">
                        <hr>
                        Medium
                    </label>
                </div>
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="body-size" id="body-size3" value="large">
                    <label class="form-check-label text-center" for="body-size3">
                        <img class="model-img" src="img/fitted2/large.png" alt="">
                        <hr>
                        Large
                    </label>
            </div>
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="body-size" id="body-size4" value="xlarge">
                    <label class="form-check-label text-center" for="body-size4">
                        <img class="model-img" src="img/fitted2/x-large.png" alt="">
                        <hr>
                        XLarge
                    </label>
            </div>
        </div>        
    </div>
            </div>
        </div>
    </div>
</form>

    <style>
        .form-group{
            margin-bottom: 15px;
        }
        .shadow{
            /* margin:15px; */
            /* margin-top:10px; */
        }
        .padding-10{
            padding:10px;
        }
        .model-img{
            height: 60vh;
        }
</style>
<?php
    include './include/footer.php';
?>