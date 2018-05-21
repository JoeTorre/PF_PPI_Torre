<!DOCTYPE html>
<html>
<head>
    <title>Uncle Joe - Success</title>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Uncle Joe</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="imgs/uj_logo.png" type="image/x-icon">
    <link rel="icon" href="imgs/uj_logo.png" type="image/x-icon">

    <?php
    include("connection.php");
    ?>

</head>
<body>

 <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index_pfppi.html">
                <img src="imgs/uj_logo.png" alt="Homepage" height="500px">
            </a>

        </div>
        <div class="home-content__buttonlog">
                    <a href="./login.php" class="btn btn--stroke">
                        Log in
                    </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Collapse</span></a>

            <div class="header-nav__content">
                <h3>-> <?php 
                if ($_SESSION['logged-in'] == true) {
                    echo $_SESSION['login_user']; 
                }else{      
                    echo "No entro";
                }
                ?></h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a  href="index_pfppi.php" title="Index">Home</a></li>
                    <li><a  href="about.php" title="About">About</a></li>
                    <li><a  href="products.html" title="Merchandise">Products</a></li>
                    <li><a  href="cart.php" title="My Cart">Cart</a></li>
                    <li><a  href="#contact" title="Contact">Reach us</a></li>
                    <li>
                    <?php if ($_SESSION['logged-in'] == true) {
                        echo "<a  href=\"./logout.php\" title=\"Session\">Log out</a>";
                    }else{
                       echo "<a  href=\"login.php\" title=\"Session\">Log in</a>";
                    }
                    ?>
                    </li>
                </ul>
    
                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0"> 
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

     <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Success!</h3>
                <h1 class="display-1 display-1--light">Thanks <?php echo $_SESSION['login_user']; ?> for Buying!</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Your order is on it's way! You can either continue shopping or log out using the top right menu. </p>
                <div class="home-content__buttones">
                <a href="./index_pfppi.php" class="btn btn--stroke">Go Home</a>
            </div>
            </div>
        </div> <!-- end about-desc -->

    </section> <!-- end s-about -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>