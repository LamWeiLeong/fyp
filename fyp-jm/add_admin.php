<?php
include 'databaseconnect.php';
session_start();
if(isset($_POST["save_staff"]))
{
    echo "Hello World";
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pw = $_POST["id"];
    $tel = $_POST["tel"];

    $insert = "INSERT INTO staff(admin_id, profile_pic, staff_pswd, staff_email, staff_tel, admin_role)
                values('$id', 'image/admin_default.png', '$pw', '$email', '$tel', '0')";
    $insert_run = mysqli_query($connect, $insert);

    if($insert_run)
    {
        $_SESSION['msg'] = "Staff $id added successfully!";
        header("location: admin_staff.php");
    }
    else
    {
        $_SESSION['msg'] = "Failed to add staff :(";
        header("location: admin_staff.php");
    }
    
}

?>