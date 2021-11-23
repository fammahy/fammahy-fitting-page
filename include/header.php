<?php 
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="include/style.css">
    <title><?php echo isset($title) ? $title.' - Fammahy Fit' : 'Fammahy fit'?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Fammahy Fit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
          <a class="nav-link" href="add-product.php">Add Product</a>
        </li>
            </ul>
            <form class="d-flex">
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
              <a href="cart.php"><button class="btn cart-btn" type="button">Cart <i class="bi bi-cart3"></i></button></a>
              <a href="profile.php"><button class="border-0 bg-none profile-btn" type="button" title="<?php echo  $_SESSION['user.name'] ?>"><i class="bi bi-person"></i></button></a>
            </form>
          </div>
        </div>
    </nav>
<style>
    /* nav{
        background-color: #aa3939;
    }
    .navbar-brand{
        font-size: 2rem;
        color: white!important;
    }
    .profile-btn{
        background: rgba(255, 255, 255, 0);
        font-size: 2rem;
        color: white!important;
    }
    .cart-btn{
        border: 0px solid #226666;
        background-color:#ffaaaa;
        color: #aa3939;
    } */

</style>