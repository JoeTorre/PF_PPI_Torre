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
    <title>Uncle Joe - Liquids</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/pfppicss.css"> 


    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <?php
    include("connection.php");
    ?>

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

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


<!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Products</h3>
                    <h1 class="display-2 display-2--light">E-Juices.</h1>
                    <h3 class="subhead" id="h3"></h3>
                    <br>
                    <button class="btn btn--stroke" id="btnClickN">Noble</button>
                    <button class="btn btn--stroke" id="btnClickR">Royal</button>
                </div>
            </div> <!-- end section-header -->

        <ul class="home-social">
            <li>
                <a href="cart.php"><i class="icon-shopping-cart" aria-hidden="true"></i><span>Cart</span></a>
            </li>
            <li>
                <a href="products_gad.php"><i class="icon-gift" aria-hidden="true"></i><span>Gadgets</span></a>
            </li>
        </ul> 

        </div> <!-- end intro-wrap -->

        

        <div class="row works-content" id="1">
            <div class="col-full masonry-wrap">
                <div class="masonry">

                <?php

                    $con=mysqli_connect("localhost", "root", "", "pf_ppi");

                    // Check connection
                    if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    // escape variables for security


                    $result = mysqli_query($con,"SELECT * FROM productos where MEDIDA = 'Royal'");


                    while($row = mysqli_fetch_array($result)) {

                ?>
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php echo $row['IMAGEN'];?>" class="thumb-link" title="<?php echo $row['NOMBRE'];?>" data-size="1050x700">
                                    <img src="<?php echo $row['IMAGEN'];?>" 
                                         srcset="<?php echo $row['IMAGEN'];?> 1x, <?php echo $row['IMAGEN'];?> 1x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title"><?php echo $row['NOMBRE'];?></h3>
                                <p class="item-folio__cat"><?php echo $row['DESCRIPCION'];?></p>
                            </div>
                            
                            <a href="<?php $_SESSION['liq-prod'] = $row['ID_PRODUCTO']; ?>insertCart.php" class="item-folio__project-link">
                               <i class="icon-shopping-cart"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <?php
                        }
                    ?>

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

        <div class="row works-content" id="2">
            <div class="col-full masonry-wrap">
                <div class="masonry">

                <?php

                    $con=mysqli_connect("localhost", "root", "", "pf_ppi");

                    // Check connection
                    if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    // escape variables for security


                    $result = mysqli_query($con,"SELECT * FROM productos where MEDIDA = 'Noble'");


                    while($row = mysqli_fetch_array($result)) {

                ?>
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php echo $row['IMAGEN'];?>" class="thumb-link" title="<?php echo $row['NOMBRE'];?>" data-size="1050x700">
                                    <img src="<?php echo $row['IMAGEN'];?>" 
                                         srcset="<?php echo $row['IMAGEN'];?> 1x, <?php echo $row['IMAGEN'];?> 1x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title"><?php echo $row['NOMBRE'];?></h3>
                                <p class="item-folio__cat"><?php echo $row['DESCRIPCION'];?></p>
                            </div>
                            
                            <a href="<?php $_SESSION['liq-prod'] = $row['ID_PRODUCTO']; ?>insertCart.php" class="item-folio__project-link">
                               <i class="icon-shopping-cart"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <?php
                        }
                    ?>

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->

      <!--  ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">

            $('#1').hide();
            $('#2').hide();

    $('#btnClickN').on('click',function(){
            $('#1').hide();
            $('#2').show();
            document.getElementById("h3").innerHTML = "Noble";
            $('#btnClickN').hide();
            $('#btnClickR').show();
    });

    $('#btnClickR').on('click',function(){
            $('#2').hide();
            $('#1').show();
            document.getElementById("h3").innerHTML = "Royal";
            $('#btnClickR').hide();
            $('#btnClickN').show();
    });
    </script>

</body>

</html>
