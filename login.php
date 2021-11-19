<?php
    $title = 'Login';
    include './include/header.php';
    include './include/config.php';

    
?>
<form action="login.php" method="POST" role="form">    
    <div class="row">
        
        <div class="col-md-4">
            
        </div>
            
        <div class="col-md-4 shadow">
            <h3 class="text-center">Login</h3>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="" id="email" class="form-control" placeholder="someone@example.com" required>
            </div>            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div> 
            <button type="submit" class="btn cart-btn" name="upload">Login</button>
        </div>           
    </div>
</form>

<style>
    .form-group{
        margin-bottom: 15px;
    }
    .shadow{
        margin-top:20vh;
    }
</style>
<?php
    include './include/footer.php';
?>