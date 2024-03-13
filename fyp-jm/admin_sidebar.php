<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin sidebar</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin_sidebar.css">
</head>

<body>
<?php
//if(!isset($_SESSION["admin_id"]))
//{
?>
    <!--<form action="admin_login.php">
        <div class="alert alert-warning alert-dismissible fade show" role="alert"
            style="margin: auto auto auto auto;width:50%;">
            <strong>Hey!</strong>You should login first before you enter admin panel !
            <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </form> -->
<?php
//exit();
//}
?>
    <div class="wrapper">
        <div class="topbar">
            <div class="logo">
                <h2>SKT PC</h2>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder="search something">
                <label for="search"><i class="lni lni-search" id="admin_icon"></i></label> 
            </div>
            <div class="user">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"
                    style="background-color:black; border:none;">
                        <img src= "image/<?php echo $_SESSION['pic'];?>">
                        <?php echo $_SESSION['admin_id']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="edit_staff.php?staff_id=<?php echo $_SESSION['id'];?>">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="a_logout.php">Logout</a></li>
            </div>
        </div><!-- topbar-->

        <aside id="sidebar" class="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Admin</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="admin_staff.php" class="sidebar-link" id="admin">
                        <img src= "image/<?php echo $_SESSION['pic'];?>">
                        <?php echo $_SESSION['admin_id']; ?>
                    </a>
                </li>
                <hr>
                
                <li class="sidebar-item">
                <a href="admin_landing.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Home/Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-protection"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" id="dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Category</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" id="dropdown" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" id="dropdown" data-bs-toggle="collapse"
                                data-bs-target="#multi-three" aria-expanded="false" aria-controls="multi-three">
                                Two Links
                            </a>
                            <ul id="multi-three" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Sales Report</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
</body>
</html>

<script>
const sidebar = document.querySelector("#sidebar");

sidebar.addEventListener("mouseover", function () {
  sidebar.classList.add("expand");
});

sidebar.addEventListener("mouseleave", function () {
  sidebar.classList.remove("expand");
});


var links = document.querySelectorAll('.sidebar a');

        links.forEach(function(link) {
            link.classList.remove('active');
        });

        links.forEach(function(link) {
            link.addEventListener('click', function() {

                links.forEach(function(link) {
                    link.classList.remove('active');
                });


                link.classList.add('active');


                localStorage.setItem('activeLink', link.getAttribute('href'));
            });
        });

        var storedActiveLink = localStorage.getItem('activeLink');
        if (storedActiveLink) {
            document.querySelector('.sidebar a[href="' + storedActiveLink + '"]').classList.add('active');
        }

</script>