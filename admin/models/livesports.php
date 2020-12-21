<?php
function livesport_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    $sql = "DELETE FROM livesport WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}