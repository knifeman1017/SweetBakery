
<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - HOME</title>

        <!-- Pizworld Inc. logo-->
        <link rel="icon" href="images/logo.jpg">


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
        
        <!--Prevent Jquery conflict -->
        <script>var $j = jQuery.noConflict(true);</script>
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
                background: #FF5B35;
                color: white;
            }

            .fa-twitter {
                background: #FF5B35;
                color: white;
            }

            .fa-google {
                background: #FF5B35;
                color: white;
            }
            img{
                vertical-align: center;
            }
        </style>
    </head>
    <body>
        <!-- Header-->
        <div class="header" style="background-color: #F4F4F4">
            <div class="container-fluid" style="height: 100px;">
                <div class=" row top-header">
                    <div class="col-sm-2" style="left: 100px;" >
                        <a href="homepage.php"><img width="100"  height=" 100" src="../images/logo.jpg"  alt="logo" /></a>
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
<<<<<<< HEAD
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" style="color: #FF5B35" href="#">MENU<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a style="color: #FF5B35" href="banhmi.php?cat=banhmi" >Bánh.....</a></li>
                                    <li><button style="color: #FF5B35" onclick="showProduct(value)" value="banhmi" >Bánh.....</button></li>
                                    <li><button style="color: #FF5B35" onclick="showProduct(value)" value="banhmi" >Bánh.....</button></li>
                                </ul>
                            </li>
=======
                            
                            <li><a href="banhmi.php" style="color: #FF5B35" href="banhmi.php">Bánh mì</a></li>
                            <li><a href="banhkem.php" style="color: #FF5B35" href="banhkem.php">Bánh kem</a></li>
                            <li><a href="banhngot.php" style="color: #FF5B35" href="banhngot.php">Bánh ngọt</a></li>
                            <li><a href="donggoi.php" style="color: #FF5B35" href="donggoi.php">Đóng gói</a></li>
                            <li><a href="theomua.php" style="color: #FF5B35" href="theomua.php">Theo mùa</a></li>
                            <li><a href="khac.php" style="color: #FF5B35" href="khac.php">Khác</a></li>
>>>>>>> 6a0e8da1fc3b781534e98437ec467dde740a4ae0
                            <li><a style="color: #FF5B35" href="viewStores.php">Cửa hàng</a></li>
                            <li><a style="color: #FF5B35" href="aboutus.php">Về chúng tôi </a></li>

                        </ul>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#"><button class="btn btn-success btn-lg" type="button" style="background-color: #FF5B35; padding: 5px;">
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
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="SignUp.php"   style="color: #FF5B35"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
                            <li><a href="Login.php"  style="color: #FF5B35"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
                        <img src="../images/logo1.jpg" alt="slide1" style="width:50%;">
                    </div>

                    <div class="item">
                        <img src="../images/logo5.jpg" alt="slide2" style="width:50%;">
                    </div>

                    <div class="item">
                        <img src="../images/logo13.jpg" alt="slide3" style="width:50%;">
                    </div>
                    <div class="item">
                        <img src="../images/logo7.jpg" alt="slide4" style="width:50%;">
                    </div>
                </div>

            </div>
        </div>
        
        <div class="row">
            <a href="viewProduct.php"><button type="button" class="col-md-offset-5 col-md-2 btn btn-success" style="margin-top: 30px; background-color: #FF5B35;">All products</button></a> 
        </div>
        
        <div class="container">
            <div class="contact-section-grids">
                 <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                    <h4 style="color: #FF5B35">Site Links</h4>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="#">Về chúng tôi</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="#">Giỏ hàng</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="#">Cửa hàng</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                    <h4 style="color: #FF5B35">Menu</h4>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="banhmi.php" >Bánh Mì</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="banhkem.php" >Bánh Kem</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="banhngot.php" >Bánh Ngọt</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="donggoi.php" >Đóng Gói</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="theomua.php" >Theo Mùa</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="khac.php" >Khác</a></li>
                    </ul>
                </div>
            
                 <div id="link" class="col-md-3 contact-section-grid wow fadeInLeft">
                     <h4 style="color: #FF5B35">Follow Us On...</h4>
                <a href="#" class="fa fa-facebook"></a>
                
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                </div>
                <div class="col-md-3 contact-section-grid wow fadeInLeft">
                    <i class="fa fa-map-marker" style="color: #FF5B35" ></i>
                    <h4 style="color: #FF5B35">590 Cách Mạng Tháng Tám, Quận 3, TPHCM</h4>
                    <i class="fa fa-phone" style="color: #FF5B35"></i>
                    <h4 style="color: #FF5B35">099 999 999</h4>
                    
                </div>
                
            </div>
        </div>
<<<<<<< HEAD

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

                xmlhttp.open("GET", "banhmi.php?cat="+ten, true);
                xmlhttp.send();
            }
        </script>
    </body>
</html>
=======
    
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
    background: #FF5B35;
    color: white;
}
 
.fa-twitter {
    background: #FF5B35;
    color: white;
}
 
.fa-google {
    background: #FF5B35;
    color: white;
}
.carousel-inner{
    horizontal-align: center;
}
        </style>
>>>>>>> 6a0e8da1fc3b781534e98437ec467dde740a4ae0
