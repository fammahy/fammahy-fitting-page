<?php
    if (isset($_POST['upload']) ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $bodysize = $_POST['body-size'];
        $phone = $_POST['phone'];
        $id = $_SESSION['userid'];
        $sql = "UPDATE users SET name = '$name', email = '$email', bodysize = '$bodysize', phone = '$phone' WHERE id=$id";
        if (mysqli_query($connect,$sql)) {
            $_SESSION['user.name'] = $name;
            $_SESSION['user.email'] = $email;
            $_SESSION['user.size'] = $bodysize;
            echo '<div class="alert alert-success" role="alert" style="margin:20px 20px 0 20px;">
                Updated Successfully :) 
            </div>';
        }
        else {
            echo '<div class="alert alert-danger" role="alert" style="margin:20px 20px 0 20px;">
            Unable to update :(
                </div>';
        }
    }


    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM users WHERE id= $id";
    $query = mysqli_query($connect,$sql);
    if ($row = mysqli_fetch_assoc($query)) {
        $name = $row['name'];
        $email = $row['email'];
        $bodysize = $row['bodysize'];
        $phone = $row['phone'];
    }
?>