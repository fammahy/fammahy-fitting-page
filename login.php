<?php
    $title = 'Login';
    include './include/header.php';
    include './include/login-logic.php';

    
?>
<form action="login.php" method="POST" role="form">    
    <div class="row">
        
        <div class="col-md-4">
            
        </div>
            
        <div class="col-md-4 shadow">
            <h3 class="text-center">Login</h3>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="someone@example.com" required>
            </div>            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div> 
            <button type="submit" class="btn cart-btn" name="upload">Login</button>
            <a class="reg-link" href="register.php">Register</a>
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
    .reg-link{
        margin-left: calc(100% - 7ex);
    }
</style>
<?php
    include './include/footer.php';
?>