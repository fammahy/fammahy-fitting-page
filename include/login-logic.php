<?php
if (isset($_POST['upload']) ) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $query = mysqli_query($connect,$sql);
    if ($row = mysqli_fetch_assoc($query)) {
        $_SESSION['userid'] = $row['id'];
        $_SESSION['user.name'] = $row['name'];
        $_SESSION['user.email'] = $row['email'];
        $_SESSION['user.role'] = $row['role'];
        $_SESSION['user.size'] = $row['bodysize'];
        echo '<div class="alert alert-success" role="alert" style="margin:20px 20px 0 20px;">
            Login Successfully :) 
        </div>
        <script>
        window.setTimeout(function(){ window.location.replace("/index.php"); },1000);
        </script>';
    }
    else {
        echo '<div class="alert alert-danger" role="alert" style="margin:20px 20px 0 20px;">
        Wrong email or password :(
            </div>';
    }
}
?>