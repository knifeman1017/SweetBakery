<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - Cart</title>

        <!-- SweetsBakery. Cart-->
        <link rel="icon" href="../images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        
       
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
                                            session_start();
                                            $order = $_SESSION['cart'];
                                            echo sizeof($order);
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
        
        <!--Cart-->
            <div class="container-fluid" style="min-height: 150px;">
            <h2 style="color: #FF5B35;margin-bottom: 10px;margin-top: 10px;">SHOPPING CART</h2>
                <div class="row">

                    <!--Cart-->
                    <div class="col-md-8">
                        <div class="container-fluid" style="background-color: white;border-radius: 10px;height: 500px;overflow: auto;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo Product</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php
                                        $ids=[];
                                    if (isset($_SESSION["cart"])) {
                                        foreach ($_SESSION["cart"] as $key => $value) {
                                            array_push($ids, $key);  // <=>ids[] = $key
                                        }
                                    }
                                    $strIDS = join("','", $ids);  //noi mang thanh chuoi, moi phan tu cach nhau dau phay
                                    $strIDS = "'" . $strIDS . "'";
                                    $sql1 = "select * from tb_product where product_id in ({$strIDS})";
                                    include_once '../SweetBakery/lib/connect.inc';
                                    $rs1 = mysqli_query($link, $sql1);
                                    $rows = mysqli_fetch_all($rs1);

                                    $totalAmount = 0;
                                    $amount = 0;
                                    $qty = 0;
                                    $id = '';
                                    foreach ($rows as $r) {
                                    $id = $r[0];
                                    $qty = $_SESSION["cart"][$id];
                                    $totalQTY += $qty;
                                    $amount = $qty * $r[3];
                                    $totalAmount += $amount;
                                    ?>
                                <tbody>
                                <tr>
                                    <td style="width: 150px;"><img src="images/product images/<?php echo $r[4]; ?>" alt="<?php echo $r[2]; ?>" style="width: 120px;height: 100px;"></td>
                                    <td style="font-weight: bold;width: 30%;"><?php echo $r[2]; ?></td>
                                    <td style="width: 100px;">
                                        <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="substract('<?php echo $r[0]; ?>')">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                    </span>
                                            <input class="form-control qtyValue" id="qtyVal<?php echo $r[0]; ?>"  type="number" max="100" min="1"  style="border-radius: 5px;width: 50px;text-align: center; padding: 10px;" value="<?php echo $qty; ?>"  onchange="change('<?php echo $r[0]; ?>')">
                                            <span class="input-group-btn">
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="add('<?php echo $r[0]; ?>')">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </span>
                                        </div>
                                    </td>
                                    <td style="">VND <?php echo number_format($amount); ?></td>
                                    <td>   <div class="col-md-2" title="Remove food item" onclick="remove('<?php echo $r[0]; ?>')"><i class="glyphicon glyphicon-remove-circle" style="color: #A82128"></i></div></td>
                                </tr>
                                </tbody>
                                <?php
                                $_SESSION["xcart"][$id]["productID"] = $id;
                                $_SESSION["xcart"][$id]["productName"] = $r[2];
                                $_SESSION["xcart"][$id]["price"] = $r[3];
                                $_SESSION["xcart"][$id]["amount"] = $amount;
                                $_SESSION["xcart"][$id]["qty"] = $qty;
                                }
                                //Save the total number of ordered items
                                $_SESSION["totalQty"] = $totalQTY;
                                echo "<p id='qty' style='display:none;'>" . $_SESSION["totalQty"] . "</p>";
                                ?>
                            </table>

                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="panel panel-danger" style="border-radius: 10px;height: 320px;">
                            <div class="panel-heading form-group form-inline">
                                <label for="Edit" style="margin-right: 80px; color: #FF5B35"><h3>ORDER INFORMATION</h3></label>
                                <a href="" data-toggle="modal" data-target="#Orderinfo"><button id="Edit" type="button" class="btn btn-primary form-control"><i class="glyphicon glyphicon-edit"></i></button></a>
                            </div>
                            <div class="panel-body">
                                <table class="table"> 
                                    <tr>
                                        <td><a href="pizza.php" ><button  type="submit" class="btn btn-primary btn-lg">Continue shopping</button></a></td>
                                        <td style="padding-left: 50px;">
                                            <form action="#" method="post" id="frCheckout">
                                                <input  type="submit" name="btnCheckout" class="btn btn-success btn-lg" value="Checkout">
                                            </form>
                                        </td>
                                    </tr>
                                </table>
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
