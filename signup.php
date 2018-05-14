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
    <title>Uncle Joe - Signup</title>
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

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
           <!-- <a class="site-logo" href="index.html">
                <img src="images/logo.png" alt="Homepage">
            </a> -->
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="Index">Home</a></li>
                    <li><a class="smoothscroll"  href="about.html" title="About">About</a></li>
                    <li><a class="smoothscroll"  href="products.html" title="Merchandise">Products</a></li>
                    <li><a class="smoothscroll"  href="login.php" title="Session">Log in</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="My Cart">Cart</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="Contact">Reach us</a></li>
                    <li><a class="smoothscroll"  href="logout.php" title="Session">Log out</a></li>
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

    <!-- contact
    ================================================== -->
    <section id="contact"  class="s-contact">

       <div class="overlay"></div> 
       <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Uncle Joe</h3>
                <h1 class="display-2 display-2--light">Sign Up!</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Fill in your info. <br> If you already have an account, please <a href="./login.php">Log in</a>.</h3>

                <form name="givForm" id="givForm" method="post" action="create_user.php" novalidate="novalidate">
                    <!--<fieldset> -->
    
                    <div class="form-field">
                        <input name="givName" type="text" id="givName" placeholder="Your Name" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="givSurname" type="text" id="contactSurname" placeholder="Your Surname" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="date" class="full-width" name="givDate" required="">
                    </div>
                    <div class="form-field">
                        <input name="givEmail" type="email" id="contactEmail" placeholder="Your Email" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="password" name="givPassword" id="password" placeholder="New Password" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="password" name="givPassword2" id="password2" placeholder="Repeat Password" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="text" name="givAddress" id="address" placeholder="Your Address" rows="3" required="" aria-required="true" class="full-width">
                    </div>
                    <br>
                    <div class="form-field">
                        <input type="number" name="givCC" id="creditcard" placeholder="Credit Card Front Digits" required="" class="full-width">
                    </div>
                    <div class="form-field">
                        <button type="submit" class="full-width btn--primary" name="submit_register">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    <!--</fieldset> -->
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Hola
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

         </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>