<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - HOME</title>

        <!-- Pizworld Inc. logo-->
        <link rel="icon" href="../images/logo.jpg">


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
                            
                            <li><a href="banhmi.php" style="color: #FF5B35" href="banhmi.php">Bánh mì</a></li>
                            <li><a href="banhkem.php" style="color: #FF5B35" href="banhkem.php">Bánh kem</a></li>
                            <li><a href="banhngot.php" style="color: #FF5B35" href="banhngot.php">Bánh ngọt</a></li>
                            <li><a href="donggoi.php" style="color: #FF5B35" href="donggoi.php">Đóng gói</a></li>
                            <li><a href="theomua.php" style="color: #FF5B35" href="theomua.php">Theo mùa</a></li>
                            <li><a href="khac.php" style="color: #FF5B35" href="khac.php">Khác</a></li>
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
                        <li><a href="#"  style="color: #FF5B35"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        
        
        
        
        <!--Đăng nhập-->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">LOGIN ACCOUNT</h3>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <h4 id="wronginfo" style="color: red"></h4>
                            <div class="form-group">
                                <label for="AccountID">Account ID</label>
                                <input  type="text" class="form-control" name="AccountID" id="AccountID" required="" title="Please type your account ID " placeholder="Enter you account ID">
                            </div>
                            <div class="form-group">
                                <label for="AccountPass">Password</label>
                                <input type="password" class="form-control" name="AccountPass" id="AccountPass" required="" title="Please type your password" placeholder="Enter your password">
                            </div>
                            <a href="SignUp.php"><p data-toggle="modal" data-target="#Signup" data-dismiss="modal">Do not have an account?</p></a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-lg" id="btnOK">LOGIN</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
              <!--footer -->
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
    </body>
</html>
