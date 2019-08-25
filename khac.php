<!DOCTYPE html>
<!--

-->
<?php
$prodcat = '%'.$_GET["cat"].'%';
echo $prodcat;
include_once '../SweetBakery/lib/connect.inc';
$sql = "select * from tb_product where product_category like '$prodcat' ";
$result = mysqli_query($link, $sql);
if (mysqli_errno($link)) {
    echo mysqli_error($link);
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product</title>
        <link href="css/css/product.css" rel="stylesheet" type="text/css"/>
        <!-- logo-->
        <link rel="icon" href="images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />

       
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
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

                            <li><a style="color: #FF5B35" href="banhmi.php?cat=banhmi">Bánh mì</a></li>
                            <li><a style="color: #FF5B35" href="banhkem.php?cat=banhkem">Bánh kem</a></li>
                            <li><a style="color: #FF5B35" href="banhngot.php?cat=banhngot">Bánh ngọt</a></li>
                            <li><a style="color: #FF5B35" href="donggoi.php?cat=donggoi">Đóng gói</a></li>
                            <li><a style="color: #FF5B35" href="theomua.php?cat=theomua">Theo mùa</a></li>
                            <li><a style="color: #FF5B35" href="khac.php?cat=khac">Khác</a></li>
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
       
        <h1>Sản Phẩm</h1>
        <br>
        
        <!-- Tab content -->
        <div id="Khac" class="tabcontent">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_row($result)) {
                    echo "<div class='column'>";
                    echo"<div class='card'>";
                    echo "<img src='../SweetBakery/Images/$row[3]]' style='width:100%'/>";
                    echo "<div class='container'>";
                    echo "<h4>$row[1]</h4>";
                    echo "<p>$row[4]đ</p>";
                    echo "<p><button class='btn btn-success btn-lg' class='button'>Order</button></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
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
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="banhmi.php?cat=banhmi" >Bánh Mì</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="banhkem.php?cat=banhkem" >Bánh Kem</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="banhngot.php?cat=banhngot" >Bánh Ngọt</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="donggoi.php?cat=donggoi" >Đóng Gói</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="theomua.php?cat=theomua" >Theo Mùa</a></li>
                    </ul>
                    <ul>
                        <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="khac.php?cat=khac" >Khác</a></li>
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
    </div>
</div>


</body>
</html>

