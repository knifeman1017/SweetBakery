<?php
session_start();
include_once './lib/connect.inc';
if (isset($_GET['logout']) && $_GET['logout'] == true) {
    //Erase all session when log out
    unset($_SESSION["customer"]);
    session_destroy();
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
              <!--Menu-->
        <?php include_once '../SweetBakery/menu_visitor.inc'?>
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
        
