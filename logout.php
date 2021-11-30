<?php
    include 'include/config.php';
    $_SESSION['userid'] = null;
    $_SESSION['user.name'] = null;
    $_SESSION['user.email'] = null;
    $_SESSION['user.role'] = null;
    $_SESSION['user.size'] = null;
    header('location:index.php');
?>