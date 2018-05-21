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
    <title>Uncle Joe - ADMIN</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

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

    if (isset($_SESSION['power'])) {
       // echo "Hola";
    }else{
        header('Location: index_pfppi.php');
    }
    ?>


</head>

<body id="top">

     <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="home-content__buttonlogo">
            <a href="./logout.php" class="btn btn--strokey">Log Out</a>
        </div>

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Store Overview</h3>
                <h1 class="display-2">ADMIN</h1>
                <h3 class="subhead" id="h3">Select from the right menu.</h3>
            </div>
        </div> <!-- end section-header -->

        <ul class="home-social">
            <li>
                <a href="#" id="btnH"><i class="icon-newspaper" aria-hidden="true"></i><span>History</span></a>
            </li>
            <li>
                <a href="#" id="btnC"><i class="icon-form" aria-hidden="true"></i><span>Change</span></a>
            </li>
            <li>
                <a href="#" id="btnA"><i class="icon-plus" aria-hidden="true"></i><span>Add</span></a>
            </li>
        </ul>

                <?php
                    $total = 0;
                    $con=mysqli_connect("localhost", "root", "", "pf_ppi");

                    // Check connection
                    if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                ?>

            <div class="services-list" id="H">

            <div class="table100 ver3 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">Ticket</th>
                                    <th class="cell100 column2">User</th>
                                    <th class="cell100 column3">Product</th>
                                    <th class="cell100 column4">Quantity</th>
                                    <th class="cell100 column5">Price</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                <?php

                    $result = mysqli_query($con,"SELECT h.compra as COMPRA, u.nombre as NOMBRE, p.nombre as NOMBREE, h.cantidad as CANTIDAD, p.precio as PRECIO FROM productos p, historial h, usuarios u WHERE u.ID_USUARIO = h.ID_USUARIO AND p.ID_PRODUCTO = h.ID_PRODUCTO");


                    while($row = mysqli_fetch_array($result)) {
                ?>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column1" style="text-align: center;"><?php echo $row['COMPRA']; ?></td>
                                    <td class="cell100 column2" style="text-align: center;"><?php echo $row['NOMBRE']; ?></td>
                                    <td class="cell100 column3" style="text-align: center;"><?php echo $row['NOMBREE']; ?></td>
                                    <td class="cell100 column4" style="text-align: center;"><?php echo $row['CANTIDAD']; ?></td>
                                    <td class="cell100 column5" style="text-align: center;">$ <?php $subtotal = $row['PRECIO'] * $row['CANTIDAD']; echo $subtotal; ?> MXN</td>
                                </tr>
                                <?php
                                    $total = $total + $subtotal;
                                    }
                                ?>
                                <tr class="row100 body">
                                    <td class="cell100 column1" style="color: #39b54a">REVENUE:</td>
                                    <td class="cell100 column2"></td>
                                    <td class="cell100 column3"></td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column5" style="color: #39b54a">$ <?php echo $total; ?> MXN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

       </div> <!--end services-list -->

       <div class="services-list" id="C">
            <form method="POST" action="">
                Product ID: <input type="number" name="prodid" value="prodid">
                <input type="submit" name="submit" onclick="select()">
            </form>

                <?php

                    if (isset($_POST['prodid'])) {
                        $prodid = $_POST['prodid'];
                
                    $result = mysqli_query($con,"SELECT * FROM productos WHERE ID_PRODUCTO = '" . $prodid . "' ");


                    while($row = mysqli_fetch_array($result)) {
                        $idprod = $row['ID_PRODUCTO'];
                        $nombre = $row['NOMBRE'];
                        $medida = $row['MEDIDA'];
                        $descripcion = $row['DESCRIPCION'];
                        $imagen = $row['IMAGEN'];
                        $precio = $row['PRECIO'];
                        $existencia = $row['EXISTENCIA'];
                        $marca = $row['MARCA'];
                        $origen = $row['ORIGEN'];
                ?>

                    <form action="updateProducts.php" method="POST"> 
                        <input type="text" value="<?php echo $nombre ?>" name="nombre" class="full-width">
                        <input type="text" value="<?php echo $medida ?>" name="medida" class="full-width">
                        <input type="text" value="<?php echo $descripcion ?>" name="descripcion" class="full-width">
                        <input type="text" value="<?php echo $imagen ?>" name="imagen" class="full-width">
                        <input type="number" value="<?php echo $precio ?>" name="precio" class="full-width">
                        <input type="number" value="<?php echo $existencia ?>" name="existencia" class="full-width">
                        <input type="text" value="<?php echo $marca ?>" name="marca" class="full-width">
                        <input type="text" value="<?php echo $origen ?>" name="origen" class="full-width">
                        <input type="hidden" name="idprod" value="<?php echo $idprod; ?>">

                        <button type="submit" style="height: 5rem; font-size: 1.5rem;" class="full-width btn--primary">Update</button>
                    </form>

                <?php
                    }
                }
                  
                ?>

       </div> <!--end services-list -->

       <div class="services-list" id="A">
             <form name="givForm" id="givForm" method="post" action="addProduct.php" novalidate="novalidate">
                    <!--<fieldset> -->
    
                    <div class="form-field">
                        <input name="nombre" type="text" id="nombre" placeholder="Product Name" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="medida" type="text" id="medida" placeholder="Measure" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="text" name="descripcion" id="descripcion" placeholder="Description" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="text" name="imagen" id="imagen" placeholder="Image Path" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="number" name="precio" id="precio" placeholder="Price" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="number" name="existencia" id="existencia" placeholder="Stock" required="" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="text" name="marca" id="marca" placeholder="Producer" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input type="text" name="origen" id="origen" placeholder="Country" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <button type="submit" style="height: 5rem; font-size: 1.5rem;" class="full-width btn--primary" name="submit_register">Insert</button>
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
        </div> <!--end services-list -->

    </section> <!-- end s-services -->
    
    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">

            $('#H').hide();
            $('#C').hide();
            $('#A').hide();

    $('#btnH').on('click',function(){
            $('#H').show();
            $('#C').hide();
            $('#A').hide();
            document.getElementById("h3").innerHTML = "History";
    });

    $('#btnC').on('click',function(){
            $('#C').show();
            $('#H').hide();
            $('#A').hide();
            document.getElementById("h3").innerHTML = "Change";
    });

    $('#btnA').on('click',function(){
            $('#A').show();
            $('#H').hide();
            $('#C').hide();
            document.getElementById("h3").innerHTML = "Add product";
    });
    </script>

</body>

</html>