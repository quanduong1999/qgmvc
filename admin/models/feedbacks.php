<?php
function feedback_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    $sql = "DELETE FROM feedback WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}