<?php

/** setting **/
// define('BASEURL' , 'http://localhost/ShopOnline');
// define('BASEPATH', dirname(__FILE__) . '/');
// define('PATH_URL', 'http://localhost/ShopOnline');
// define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
// define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');
//http: //localhost/ShopOnline/public/upload/images/


$connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
mysqli_set_charset($connect, 'utf8');
if (mysqli_connect_errno() == 0) {
    // echo "oko";
}
?>

<?php
// //mysql datbase connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "multilanguage";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>	
