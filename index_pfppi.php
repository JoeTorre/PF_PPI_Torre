<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

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

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index_pfppi.html">
                <img src="imgs/uj_logo.png" alt="Homepage" height="500px">
            </a>

        </div>
        <div class="home-content__buttonlog">
                <?php 
            if (isset($_SESSION['logged-in'])) {
                if ($_SESSION['logged-in'] == true) {
                        echo "<a href=\"./logout.php\" class=\"btn btn--stroke\">Log out</a>";
                    }else{
                       echo "<a href=\"./login.php\" class=\"btn btn--stroke\">Log in</a>";
                    }
                }else{
                    echo "<a href=\"./login.php\" class=\"btn btn--stroke\">Log in</a>";
                }
                    ?>
                
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


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="imgs/bghome1.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Uncle Joe</h3>
                <br>
                <br>
                <h1>
                    Smoke quality.
                </h1>

                <div class="home-content__buttons">
                    <a href="products.html" class="btn btn--stroke">
                        Products
                    </a>
                    <a href="./signup.php" class="btn btn--stroke">
                        Sign Up
                    </a>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Glint 2017</span> 
                    <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span>  
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>