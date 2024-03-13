<?php
include 'databaseconnect.php';
session_start();
if(isset($_POST["a_login"]))
{
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    $find = "SELECT * FROM staff WHERE admin_id = '$id' AND staff_pw ='$pw'";
    $result = mysqli_query($connect, $find);
    $row = mysqli_fetch_array($result);

    if(empty($row))
    {
        echo "failed to login :(";
    }
    else
    {
        $_SESSION['id'] = $row['staff_id'];
        $_SESSION['pic'] = $row['p_pic'];
        $_SESSION['admin_id'] = $id;
        $_SESSION['sa'] = $row['sa'];
        header("location: admin_landing.php");
    }
}