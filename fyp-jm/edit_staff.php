 <?php
include 'databaseconnect.php';
include 'admin_sidebar.php';
?>

<style>
.card-header
{
    display:flex;
    justify-content: space-between;
}
.card
{
    width:70%;
}
.e-form
{
    display:grid;
    grid-template-columns: 1fr 2fr;
}
.main h1
{
    font-size:45px;
}
form .imgholder{
    width: 200px;
    height: 200px;
    margin-left:auto;
    margin-right:auto;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
}
.imgholder .upload{
    position: absolute;
    bottom: 0;
    left: 10;
    width: 100%;
    height: 100px;
    background: rgba(0,0,0,0.3);
    display: none;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.upload{
    color: #fff;
}

.imgholder:hover .upload{
    display: flex;
    font-size:50px;
}

.imgholder .upload input{
    display: none;
}
.inputField label
{
    width: 150px;
    text-align: left;
}
form .inputField input {
    margin-bottom: 20px;
}
button
{
    /* margin-left:12%; */
    width:100%;
}
</style>
<body>
<?php
    $id = $_GET['staff_id'];
    $query = "SELECT * FROM staff WHERE staff_id='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {
?>
    <div class="main p-3">
            <div class="e-head">
                <h1>Edit Profile</h1>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>You can update your information here.<h5>
                    <button type="button" class="btn btn-warning" onclick="history.back()">Back</button>
                </div>
                <div class="card-body">
        <form action="e_staff.php" method="POST" class="form" id="myForm">
            <div class="e-form">
                <div class="card imgholder">
                    <label for="imgInput" class="upload">
                        <input type="file" name="pic" id="imgInput">
                        +
                    </label>
                    <img src="image/<?php echo $row['p_pic']?>" width="200" height="200" class="img">
                    <?php $_SESSION['default'] = $row['p_pic']?>
                </div>
                <div class="inputField">
                    <div>
                        <label>ID:</label>
                        <input type="text" value ="<?php echo $row['admin_id']?>" class="form-control" readonly>
                    </div>
                    <div>
                        <label>Full Name:</label>
                        <input type="text" class="form-control" value ="<?php echo $row['full_name']?>" name="fn">
                    </div>
                    <div>
                        <label>Password:</label>
                        <input type="text" class="form-control" value ="<?php echo $row['staff_pw']?>" name="pw">
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="text" class="form-control" value ="<?php echo $row['staff_email']?>" name="eml">
                    </div>
                    <div>
                        <label>Telephone.No:</label>
                        <input type="text" class="form-control" value ="<?php echo $row['staff_tel']?>" name="tel">
                    </div>
                </div>
                <?php
        }
    }
    else
    {
        echo "no record found:(";
    }
    ?>
            </div>
                <button type="submit" class="btn btn-primary" name="edit_staff">Update</button>
    </form>
                </div>
            </div>
    </div>
</body>
