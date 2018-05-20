<!DOCTYPE html>
<html>
<head>
	<title>Uncle Joe - Cart</title>

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
    	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

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
                    <li><a  href="about.html" title="About">About</a></li>
                    <li><a  href="products.html" title="Merchandise">Products</a></li>
                    <li><a  href="#clients" title="My Cart">Cart</a></li>
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
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0"> 
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
        

    </header> <!-- end s-header -->


 <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
            	<h3 class="subhead">Your Items So Far</h3>
            	<h1 class="display-2">Cart</h1>
            </div>

            <ul class="home-social">
            <li>
                <a href="products.html"><i class="icon-gift" aria-hidden="true"></i><span>Buy More</span></a>
            </li>
        </ul> 

        </div> <!-- end section-header -->

        <div class="services-list"> 

        		<div class="home-content__buttonlog">
					<a href="./action_checkout.php" class="btn btn--stroke">BUY</a>
				</div>

            <div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">Brand</th>
									<th class="cell100 column3">Size</th>
									<th class="cell100 column4">Quantity</th>
									<th class="cell100 column5">Price</th>
									<th class="cell100 column6">Option</th>
								</tr>
							</thead>
						</table>
					</div>

				<?php
					$total = 0;
                    $con=mysqli_connect("localhost", "root", "", "pf_ppi");

                    // Check connection
                    if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    // escape variables for security


                    $result = mysqli_query($con,"SELECT p.*, c.* FROM productos p, carrito c, usuarios u WHERE u.ID_USUARIO = c.ID_USUARIO AND p.ID_PRODUCTO = c.ID_PRODUCTO AND  c.ID_USUARIO = '" . $_SESSION['userid'] . "' ");


                    while($row = mysqli_fetch_array($result)) {
                    	$idprod = $row['ID_PRODUCTO'];
                ?>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $row['NOMBRE']; ?></td>
									<td class="cell100 column2"><?php echo $row['MARCA']; ?></td>
									<td class="cell100 column3"><?php echo $row['MEDIDA']; ?></td>
									<td class="cell100 column4"><?php echo $row['CANTIDAD']; ?></td>
									<td class="cell100 column5">$ <?php $subtotal = $row['PRECIO'] * $row['CANTIDAD']; echo $subtotal; ?> MXN</td>
									<td class="cell100 column6"><form action="deleteProduct.php" method="POST"> <input type="hidden" value="<?php echo $idprod; ?>" name="delete">
										<button type="submit"  class="btnn btn--strokey">Delete</button></form></td>
								</tr>
								<?php
									$total = $total + $subtotal;
									}
								?>
								<tr class="row100 body">
									<td class="cell100 column1" style="color: #39b54a">TOTAL:</td>
									<td class="cell100 column2"></td>
									<td class="cell100 column3"></td>
									<td class="cell100 column4"></td>
									<td class="cell100 column5" style="color: #39b54a">$ <?php echo $total; ?> MXN</td>
									<td class="cell100 column4"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

       </div> <!--end services-list -->



    </section> <!-- end s-services -->

        <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>