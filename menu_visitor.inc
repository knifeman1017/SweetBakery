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
                        <a href="<?php if(isset($_SESSION["customer"])){echo 'product_cart_view.php';}else{echo "Login.php";}?>"><button class="btn btn-success btn-lg" type="button" style="background-color: #FF5B35; padding: 5px;">
                                <i class="glyphicon glyphicon-shopping-cart"></i> <span class="badge">
                                           <?php
                                           if (isset($_SESSION["cart"])&&isset($_SESSION["customer"])) {
                                               echo sizeof($_SESSION['cart']);
                                           } else {
                                               echo 0;
                                           }
                                           ?></span>
                            </button></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    <?php
                    include_once "../SweetBakery/lib/connect.inc";
                    if (isset($_SESSION["customer"])) {
                        ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" style="color: #FF5B35"  href="#"><span class="glyphicon glyphicon-user"></span> Hello, <?php echo $_SESSION["customer"]->customer_name; ?></a>
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