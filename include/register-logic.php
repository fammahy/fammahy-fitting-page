<?php 

// include 'config.php';

if (isset($_POST['upload']) ) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $bodysize = $_POST['body-size'];
    $sql = "insert into users(name,email,password,phone,bodysize) values('$name','$email','$password','$phone','$bodysize')";
    if(mysqli_query($connect,$sql)){
        
        // $MSG = 'Data Successfully Submitted.';
        
        // $json = json_encode($MSG);
        echo '<div class="alert alert-success" role="alert" style="margin:20px 20px 0 20px;">
            Registered Successfully :)
        </div>';
        // echo $json ;
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
        Unable register. Try again later :(
            </div>';
    }
}
?>