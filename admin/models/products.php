<?php
function products_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    $product = get_a_record('product', $id);
    $image = 'public/upload/product/' . $product['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM product WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}