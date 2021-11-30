<?php
    $title = 'Profile';
    include './include/header.php';
    include './include/profile-logic.php';

    
?>
<form action="profile.php" method="POST" role="form">    
    <div class="row padding-10">
        
        <div class="col-md-1">
            
        </div>
        <div class="col-md-12 shadow bg-white">  
            
            <div class="row">                
                
                <div class="col-md-4">
                <h3 class="text-center">Edit Profile</h3>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name?>" placeholder="Gabrielle Bonheur" required>
                </div> 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email?>" placeholder="someone@example.com" required>
                </div>            
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $phone?>" placeholder="07871-274854" required>
                </div> 
                
                <div class="row">
                    
                    
                    <button type="submit" class="btn cart-btn col" name="upload">Save</button>
                    <div class="col-sm-4"></div>
                    <a class="btn btn-danger col" href="logout.php" name="upload">Logout</a>
                </div>
            </div>   
            <div class="col-md-8">
                
                
                <div class="row">
                    
                    <div class="form-check col-md-3">
                        <input class="form-check-input" type="radio" name="body-size" id="body-size1" value="sm" checked>
                    <label class="form-check-label text-center" for="body-size1">
                        <img class="model-img" src="img/fitted2/small.png" alt="">
                        <hr>
                        Rectangle
                    </label>
                </div>
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="body-size" id="body-size2" value="m">
                    <label class="form-check-label text-center" for="body-size2">
                        <img class="model-img" src="img/fitted2/medium.png" alt="">
                        <hr>
                        Hourglass
                    </label>
                </div>
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="body-size" id="body-size3" value="l">
                    <label class="form-check-label text-center" for="body-size3">
                        <img class="model-img" src="img/fitted2/large.png" alt="">
                        <hr>
                        Pear
                    </label>
            </div>
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="body-size" id="body-size4" value="xl">
                    <label class="form-check-label text-center" for="body-size4">
                        <img class="model-img" src="img/fitted2/x-large.png" alt="">
                        <hr>
                        Apple
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
<script>
    let k = document.getElementsByName('body-size');
    let bodysize = '<?php echo $bodysize?>';
    switch (bodysize) {
            case 'sm':
                k[0].checked = true;
                break;
            case 'm':
                k[1].checked = true;
                break;
            case 'l':
                k[2].checked = true;
                break;
            case 'xl':
                k[3].checked = true;
                break;
        
            default:
                break;
        }

</script>
<?php
    include './include/footer.php';
?>