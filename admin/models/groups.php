<?php
function subcategories_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    require_once('admin/models/products.php');
    $options = array(
        'select' => 'id',
        'where' => 'SubCategoryId=' . $id
    );
    $products = get_all('product', $options);
    foreach ($products as $product) {
        products_delete($product['id']);
    }
    $sql = "DELETE FROM subcategory WHERE Id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}