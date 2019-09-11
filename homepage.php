<?php
session_start();
include_once './lib/connect.inc';
if (isset($_GET['logout']) && $_GET['logout'] == true) {
    //Erase all session when log out
    session_destroy();
    unset($_GET["logout"]);
    header("location:homepage.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - HOME</title>

        <!-- SweetsBakery. logo-->
        <link rel="icon" href="../SweetBakery/images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        
         <!-- JAVASCRIPT FRAMEWORK-->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js" ></script>
        <script type="text/javascript" src="js/jquery.min.js" ></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script src="js/wow.min.js"></script>
       
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script>var $j = jQuery.noConflict(true);</script>
    </head>
    <body>
        <!-- Header-->
        <div class="header" style="background-color: #F4F4F4">
            <div class="container-fluid" style="height: 100px;">
                <div class=" row top-header">
                    <div class="col-sm-2" style="left: 100px;" >
                        <a href="homepage.php"><img width="100"  height=" 100" src="../SweetBakery/images/logo.jpg"  alt="logo" /></a>
                    </div>
                    <div class="col-sm-8" style="text-align: center;color: #FF5B35;font-weight: bold;top: 40px;font-size: 1.2em;">
                        <p>Welcome SweetsBakery</p>
                        <p>VIỆT NAM</p>
                    </div>

                </div>
            </div>
        </div>

        <!--Menu-->
        <div class="menu-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid" >
                        <ul class="nav navbar-nav">
                            <li ><a href="homepage.php" style="color: #FF5B35"><i class="glyphicon glyphicon-home"></i></a></li>
                                                      
                            <li><a style="color: #FF5B35" href="product.php?cat=banhmi">Bánh mì</a></li>
                            <li><a style="color: #FF5B35" href="product.php?cat=banhkem">Bánh kem</a></li>
                            <li><a style="color: #FF5B35" href="product.php?cat=banhngot">Bánh ngọt</a></li>
                            <li><a style="color: #FF5B35" href="product.php?cat=donggoi">Đóng gói</a></li>
                            <li><a style="color: #FF5B35" href="product.php?cat=theomua">Theo mùa</a></li>
                            <li><a style="color: #FF5B35" href="product.php?cat=khac">Khác</a></li>
                            <li><a style="color: #FF5B35" href="viewStores.php">Cửa hàng</a></li>
                            <li><a style="color: #FF5B35" href="aboutus.php">Về chúng tôi </a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="cart.php"><button class="btn btn-success btn-lg" type="button" style="background-color: #FF5B35; padding: 5px;">
                                        <i class="glyphicon glyphicon-shopping-cart"></i> <span class="badge"> 
                                            <?php
                                            if (isset($_SESSION["totalQty"])) {
                                                echo $_SESSION["totalQty"];
                                            } else {
                                                echo 0;
                                            }
                                            ?></span>
                                    </button></a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right ">
                            <?php
                            if (isset($_SESSION["ten"])) {
                                ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" style="color: #FF5B35"  href="#"><span class="glyphicon glyphicon-user"></span> Hello, <?php echo $_SESSION["ten"]; ?></a>
                                    <ul class="dropdown-menu" >
                                        <li><a href="editAcc.php"> <span class="glyphicon glyphicon-pencil"></span> Profile</a></li>
                                        <li><a href="#"> <span class="glyphicon glyphicon-shopping-cart"> History </span></a></li>
                                        <li><a href="homepage.php?logout=true"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                    </ul>
                                </li>
                                  <?php
                            } else {
                                ?>
                             <li><a href="SignUp.php"   style="color: #FF5B35"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
                            <li><a href="Login.php"  style="color: #FF5B35"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                            }
                        ?>
                        </ul>
                        
                    </div>
                </nav>
            </div>

            <!-- Carousel -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../SweetBakery/images/logo1.jpg" alt="slide1" style="width:50%;">
                    </div>

                    <div class="item">
                        <img src="../SweetBakery/images/logo5.jpg" alt="slide2" style="width:50%;">
                    </div>

                    <div class="item">
                        <img src="../SweetBakery/images/logo13.jpg" alt="slide3" style="width:50%;">
                    </div>
                    <div class="item">
                        <img src="../SweetBakery/images/logo7.jpg" alt="slide4" style="width:50%;">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <a href="product.php"><button type="button" class="col-md-offset-5 col-md-2 btn btn-success" style="margin-top: 30px; background-color: #FF5B35;">All products</button></a> 
        </div>

       

                <footer class="panel-footer" id="footer">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4 style="color: #FF5B35">Sweets Bakery</h4>

                            <h5 style="color: #FF5B35">2019 &copy; All Rights Reserved</h5>
                        </div>
                        <div class="col-xs-6 text-right">
                            <h4 style="color: #FF5B35">Follow Us</h4>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                        </div>
                    </div>
                </footer>

            </div>
            
            
        </div>

        <script>
            function showProduct(ten) {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("proList").innerHTML = this.responseText;
                    }
                }
        </script>

    </div>
</body>
</html>

  <style>
            .fa {
    padding: 20px;
    font-size: 30px;
    width: 70px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
}
 
.fa:hover {
    opacity: 0.7;
}
 
.fa-facebook {
    background: #3B5998;
    color: white;
}
 
.fa-twitter {
    background: #55ACEE;
    color: white;
}
 
.fa-google {
    background: #dd4b39;
    color: white;
}
 
.fa-youtube {
    background: #bb0000;
    color: white;
}
        </style>
        
