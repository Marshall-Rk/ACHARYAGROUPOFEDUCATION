<?php
ob_start();
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'acharya');
 
$error="";
$allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "bmp", "BMP", "gif", "GIF", "jfif", "JFIF", 'webp', 'WEBP');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>

