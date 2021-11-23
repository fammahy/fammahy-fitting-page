<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'fit');
   $connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   $_SESSION['userid'] = isset($_SESSION['userid']) ? $_SESSION['userid']: "";
//    $GLOBALS['userid'];
   $_SESSION['user.name'] = isset($_SESSION['user.name']) ? $_SESSION['user.name']: "";
   if(!$connect)
   {
       echo json_encode("Connection Failed");
   }
?>