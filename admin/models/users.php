<?php
function user_login($email, $password)
{
    require "./lib/dbConnect.php";
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 0,1";
    $query = mysqli_query($connect, $sql) or die($connect->mysql_error);
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        return true;
    }
    return false;
}
function user_delete($id)
{
    require "./lib/dbConnect.php";
    $id = intval($id);
    $sql = "DELETE FROM user WHERE id=$id";
    mysqli_query($connect, $sql) or die($connect->mysql_error);
}