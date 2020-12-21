<?php
function comment_delete($comid)
{
    require "./lib/dbConnect.php";
    $id = intval($comid);
    //x�a ph?n gi?i thi?u
    $sql = "DELETE FROM comment WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}