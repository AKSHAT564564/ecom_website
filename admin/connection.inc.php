<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecom/');
define('SITE_PATH','http://127.0.0.1/php/ecom/');

define('PRODUCT_IMAGE_SERVER_PATH','upload/');
define('PRODUCT_IMAGE_SITE_PATH','upload/');
?>