<!DOCTYPE html>
<?php
session_start();
if(isset($_GET["cat"])){
    $prodcat = '%' . $_GET["cat"] . '%';
    $sql = "select * from tb_product where product_category like '$prodcat' ";
}else{
    $sql = "select * from tb_product";
}

include_once '../SweetBakery/lib/connect.inc';
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
        <link rel="icon" href="../SweetBakery/Images/logo.jpg">
        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>
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
        </style>
    <body>
        <!--Menu-->

          <?php include_once '../SweetBakery/menu_visitor.inc'?>

            <h1 style="color: #FF5B35;">Sản Phẩm</h1>
            <h4 style="color: #FF5B35; text-align: center;">Chúng tôi làm nên những chiếc bánh không những ăn ngon mà còn mang đến cảm nhận tuyệt vời khi bạn cắn vào hương vị xốp mềm đó</h4>
            <br>


            <!-- Tab content -->
            <div id="Banhmi" class="tabcontent" >
                <div class="row" style=" margin-left: 100px;">
                    <?php
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<div class='column'>";
                        echo " <div class='card'>";
                        echo "<img src='../SweetBakery/Images/$row[3]'style='width:100%' title='$row[2]'/>";
                        echo "<div class='container'>";
                        echo "<h5>$row[1]</h5>";
                        echo "<p>$row[4] đ</p>";
                        if(isset($_SESSION["customer"])){

                                if (isset($_SESSION["cart"][$row[0]])){
                                    echo "<p><a class='btn btn-success disabled btn-lg'  href='product_cart.php?id=$row[0]'>Add to cart</a></p>";
                                }else{
                                    echo "<p><a class='btn btn-success btn-lg'  href='product_cart.php?id=$row[0]'>Add to cart</a></p>";
                                }


                        }else{
                            echo "<p><a class='btn btn-success btn-lg'  href='Login.php'>Add to cart</a></p>";
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
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


</body>
</html>
