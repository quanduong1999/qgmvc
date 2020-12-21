<?php
function role_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    $sql = "DELETE FROM role WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}