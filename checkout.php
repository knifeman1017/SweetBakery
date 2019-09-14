<?php
include_once '../SweetBakery/lib/data.inc';
include_once 'lib/connect.inc';
if(isset($_GET["btnConfirm"])) {
    $sql = "select max(order_id) as max from tb_order";
    $result1 = mysqli_query($link, $sql);
    $row = mysqli_fetch_row($result1);
    $order_id = $row[0];
    $sql1 = "insert into tb_order values (null,'$customer->customer_id','2019-09-13',0,'2019-09-15',null)";
    mysqli_query($link, $sql1);
    $grand = 0;
    foreach ($order as $p) {
        $amt = $p->product_price * $p->qty;
        $grand += $amt;
        $sql2 = "insert into tb_orderitem values ($order_id,'$p->product_id',$p->qty,$amt)";
        mysqli_query($link, $sql2);
    }
    header("location:homepage.php");
    unset($_SESSION["cart"]);
}

//kiem tra nut check-out da duoc bam hay chua
if(isset($_POST['btnCheckout'])==FALSE){
    header("location:product_cart_view.php");
}
session_start();
//da co gio hang: lay noi dung gio hang -> bien order
$order = $_SESSION["cart"];
$customer = $_SESSION["customer"];
foreach ($order as $p){
    $qty = $_POST["qtyVal$p->product_id"];
    $p->qty = $qty;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SweetsBakery - Cart</title>

    <!-- SweetsBakery. Cart-->
    <link rel="icon" href="../images/logo.jpg">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript">var $j = jQuery.noConflict(true);</script>

    <!--CSS FRAMEWORK-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
    <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
    <link href="css/animate.css" rel='stylesheet' type='text/css' />


    <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!--Prevent Jquery conflict -->

</head>
<body>
<!--Menu-->
<?php include_once '../SweetBakery/menu_visitor.inc'?>
<!--Cart-->
<form action="checkout.php">
    <div class="container-fluid" style="min-height: 150px;">
        <h2 style="color: #FF5B35;margin-bottom: 10px;margin-top: 10px;">SHOPPING CART</h2>
        <div class="row">

            <!--Cart-->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid" style="background-color: white;border-radius: 10px;height: 500px;overflow: auto;">
                            <table class="table table-hover" <?php
                            if(isset($_SESSION["cart"])==FALSE){ echo"style='visibility: hidden;'";}
                            ?>>
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php

                                    if(isset($_SESSION["cart"])==FALSE){
                                        //chua co gio hang -> quay ve trang dat hang
                                        echo "Chưa có sản phẩm nào trong giỏ hàng!!!";
                                        exit();
                                    }

                                    $stt=1;
                                    $tong=0;
                                    $grand=0;
                                    foreach ($order as $p) {
                                        $amt = $p->product_price*$p->qty;
                                        $grand+=$amt;
                                        echo '<tr>';
                                        echo "<td>$stt</td>";
                                        echo "<td>$p->product_name</td>";
                                                                 echo "<td>$p->qty</td>";
                                        echo "<td>$p->product_price</td>";
                                        echo "<td>$amt</td>";
                                        echo '</tr>';
                                        $stt++;
                                    }
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Thành Tiền</th>
                                <th><?php     echo $grand; ?></th>
                            </tr>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="panel panel-danger" style="border-radius: 10px;height: 320px;">
                    <div class="panel-heading form-group form-inline">
                        <label for="Edit" style="margin-right: 80px; color: #FF5B35"><h3>ORDER INFORMATION</h3></label>
                        <a href="" data-toggle="modal" data-target="#Orderinfo"><button id="Edit" type="button" class="btn btn-primary form-control"><i class="glyphicon glyphicon-edit"></i></button></a>
                    </div>
                    <div class="panel-body">

                            <p> <b>Name: </b> <?php       echo "$customer->customer_name </p>";?>
                            <p> <b>Email: </b> <?php       echo "$customer->customer_email </p>";?>
                            <p> <b>Phone No.: </b> <?php       echo "$customer->customer_tel </p>";?>
                            <p><b>Address</b></p>

                        <table class="table">
                            <tr>
                                <td style="padding-left: 50px;">
                                    <input  type="submit" name="btnConfirm" class="btn btn-success btn-lg" value="Confirm">
                                </td>
                                <td><a href="product.php" ><button  type="button" class="btn btn-danger btn-lg">Cancel</button></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


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
