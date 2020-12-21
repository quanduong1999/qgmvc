<?php
function counter_delete($couid)
{
    require "./lib/dbConnect.php";
    $couid = intval($couid);
    $sql = "DELETE FROM user_online WHERE session=$couid";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}