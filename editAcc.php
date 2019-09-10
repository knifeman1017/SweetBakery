<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - EditAcc</title>

        <!-- SweetsBakery. logo-->
        <link rel="icon" href="../SweetBakery/images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        
        
       
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
                                <a href="cart_view.php"><button class="btn btn-success btn-lg" type="button" style="background-color: #FF5B35; padding: 5px;">
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
            
            
            <div class="modal-dialog" role="document">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">ACCOUNT INFORMATION</h3>
                        </div>
                        <div class="panel-body">
                            <form action="#" method="post" id="frEdit">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="MemberName">Full Name</label>
                                        <input type="text" class="form-control" name="MemberName" id="MemberName" id="MemberName" placeholder="Your name must be 5-30 characters (no numbers or special characters)"   value="" pattern="[a-z A-Z]{5,30}" required="" >
                                    </div>
                                    <label for="MemberID">Account ID</label>
                                    <input type="text" class="form-control" name="MemberID" id="MemberID"  required="" value=""readonly=""  pattern="[a-z_A-Z]{5,30}">
                                </div>

                                <div class="form-group">
                                    <label for="MemberName">Tel</label>
                                    <input type="text" class="form-control" name="MemberTel" id="MemberTel"  required="" value="" placeholder="Your tel number must be 10-11 digits" pattern="[0-9]{10,11}" >
                                </div>
                                <div class="form-group">
                                    <label for="MemberName">Email</label>
                                    <input type="email" class="form-control" name="MemberMail" id="MemberMail"  required="" value="" placeholder="xxx@xxx.xxx" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                </div>
                                <div class="form-group">
                                    <label for="MemberName">Old Password</label>
                                    <input type="password" class="form-control" name="OldMemberPass"  id="OldMemberPass"  required="" value="" pattern="[a-zA-Z0-9]{5,30}" >
                                </div>
                                <div class="form-group">
                                    <label for="MemberName">New Password</label>
                                    <input type="password" class="form-control" name="MemberPass"  id="MemberPass" placeholder="Your password must be 5-30 characters (no word spacing or special characters)"  required="" value="" pattern="[a-zA-Z0-9]{5,30}" >

                                </div>
                                <div class="form-group">
                                    <label for="MemberName">Confirm Password</label>
                                    <input type="password" class="form-control"  id="confirmMemberPass"  required="" value="" >
                                    

                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" name="btnSave">  <span class="glyphicon glyphicon-save"></span> Save changes </button>
                                <input type="reset" class="btn btn-warning btn-lg" name="btnReset">
                            </form>
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
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=banhmi" >Bánh Mì</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=banhkem" >Bánh Kem</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=banhngot" >Bánh Ngọt</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=donggoi" >Đóng Gói</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=theomua" >Theo Mùa</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=khac" >Khác</a></li>
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
