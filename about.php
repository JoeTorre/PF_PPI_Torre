<!DOCTYPE html>
<html>
<head>
	<title>Uncle Joe - About</title>

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
                if (isset($_SESSION['logged-in'])) {
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
                    <?php if (isset($_SESSION['logged-in'])) {
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
                <h3 class="subhead subhead--dark">Know More About Joe</h3>
                <h1 class="display-1 display-1--light">It's Uncle Joe</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Uncle Joe was born from the idea that anyone should be able to buy good quality and cheap e-liquids with great flavour. The company was founded at 2017. Since then we have provided many customers with great quality products. 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">2017</div>
                <h5>Established</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">356</div>
                <h5>Number of Flasks</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">109</div>
                <h5>Something Else</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">102</div>
                <h5>Happy Clients</h5> 
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>