<?php
function introduction_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    $sql = "DELETE FROM intro WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}