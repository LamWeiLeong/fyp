<?php
include 'databaseconnect.php';
session_start();
if(isset($_POST['edit_staff']))
{
    $id = $_SESSION['id'];
    $pic1 = $_POST['pic'];
    $pic2 = $_SESSION['default'];
    if(!empty($pic1) && $pic1 != $pic2)  {
        $pic = $pic1;
    } else {
        $pic = $pic2;
    }
    $fn = $_POST['fn'];
    $pw = $_POST['pw'];
    $eml = $_POST['eml'];
    $tel = $_POST['tel'];

    $update = "UPDATE staff SET full_name='$fn', p_pic='$pic', staff_email='$eml', staff_pw='$pw', staff_tel='$tel'
                WHERE staff_id='$id'";
    $update_run = mysqli_query($connect,$update);

    if($update_run)
    {
        $_SESSION['status'] = 'Updated Successfully!';
        $_SESSION['pic'] = $pic;
        unset($_SESSION['default']);
        header('location:admin_staff.php');
    }
}
?>