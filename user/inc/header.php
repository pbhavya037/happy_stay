<!-- Navbar -->
<?php 
    require('db_config.php');
    require('essential.php');
    userlogin();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Happy Stay</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link me-2" href="user_panel.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
        <div class="d-flex">
            <li class="nav-item dropdown btn btn-outline-dark shadow-none me-lg-3 me-2" >
                        <a href="#" class="nav-link text-reset dropdown-toggle " data-bs-toggle="dropdown" >
                        <i class="bi bi-person-circle"></i>
                        <?php 
                            $k =  $_SESSION['userID'];
                            $query = "SELECT name FROM custumer WHERE cus_id = ?";
                            $values = [$k];
                            $res = selectt($query,$values);
                            echo $res[0]['name'];
                        ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="/proj/user/profile.php" class="dropdown-item">Profile</a>
                            <a href="/proj/user/bookings.php" class="dropdown-item">Bookings</a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
            </li>
            
            <div class="dropdown">
        </div>
        </div>
    </div>
</nav>
