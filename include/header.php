<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>
<header class="header">
    <div class="top-header">
    <div class="container">
    <div class="row">
        <div class="col-6 col-lg-4 d-flex justify-content-end">
            <div class="shiping-text">
                <a href="#">free shipping on all order above $25</a>
            </div>
        </div>
        <div class="col-6 col-lg-4"></div>
        <div class="col-6 col-lg-4 d-flex justify-content-end">
            <div class="social-icon">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="container">
        <div class="row ali">
            <div class="col-12 col-lg-2">
                <div class="logo">
                    <a href="index.php">
                        <img src="./images/logo.jpg" class="img-fluid" alt="img">
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center">
            <div class="menu">
                <ul>
                    <li><a href="index.php" class="active">home</a></li>
                    <li><a href="ourproducts.php">products</a></li>
                    <li><a href="warranty.php">warranty</a></li>
                    <li><a href="#">FAQ'S</a></li>
                    <li><a href="contactus.php">contact us</a></li>
                    <li><a href="about.php">about us</a></li>
                </ul>
            </div>    
            </div>
            <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center">
                <div class="header-icons">
                    <ul>
                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                        <li><a href="#"><i class="far fa-user"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<body>