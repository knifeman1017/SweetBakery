

<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - Login</title>

        <!-- SweetsBakery. logo-->
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

                            <li><a style="color: #FF5B35" href="product.php?cat=banhmi">Bánh mì</a></li>
                            <li><a  style="color: #FF5B35" href="product.php?cat=banhkem">Bánh kem</a></li>
                            <li><a  style="color: #FF5B35" href="product.php?cat=banhngot">Bánh ngọt</a></li>
                            <li><a style="color: #FF5B35" href="product.php?cat=donggoi">Đóng gói</a></li>
                            <li><a  style="color: #FF5B35" href="product.php?cat=theomua">Theo mùa</a></li>
                            <li><a  style="color: #FF5B35" href="product.php?cat=khac">Khác</a></li>
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
                    <form method="get">
                <div class="form-group row text-right">
                    <label for="user" class="font-weight-bold col-sm-3 col-form-label ">User</label>
                    <div class="col-sm-9">
                        <input type="text" id="user" name="txtUser" class="form-control w-75" placeholder="Enter User" required />
                        
                    </div>
                </div>
                <div class="form-group row text-right">
                    <label for="pass" class="font-weight-bold col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="pass" name="txtPass" class="form-control w-75" placeholder="Enter Password">
                    </div>
                </div>
                <div class="form-group mb-5" align="center">
                    <input class="form-control-sm btn btn-primary" type="submit" value="Login" name="btLogin" />
                    <input type="reset" class="form-control-sm btn btn-info" value="Reset">
                </div>
            </form>
                </div>
            </div>



            <!--footer -->
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
<?php
  // tao ket noi voi db
    include_once '../SweetBakery/lib/connect.inc';
//kiem tra nut submit da duoc bam chua
if (isset($_GET["btLogin"]) == TRUE) {
    // lay du lieu trong 2 o username, password
    $user = $_GET["txtUser"];
    $password = $_GET["txtPass"];

  

    //tao linh truy van
    $sql = "select * from tb_customer where customer_id like '$user'";

    //thuc hien hieu lenh truy van
    $result = mysqli_query($link, $sql);

    //kiem tra loi
    if (mysqli_connect_errno($link)) {
        // neu co loi sai => thong bao loi
        mysqli_error($link);
        exit();
    }
    if (mysqli_num_rows($result) == 0) {
        die('<h3> tai khoan ko ton tai, vui long nhap lai !!!</h3>');
    }
    // da tim thay dong co ma tk == user, tiep tuc kiem tra password
    //doc dong du lieu 
    $row = mysqli_fetch_row($result);
    echo $row[1];
    if( ($row[1] == $password)) {
        // tai khoan va mat khau hop le => chuyen trang   
            header("location:homepage.php");      
    }
     else {
            die("<h3>mat ma ko dunh vui long nhap lai</h3>");
        }
}
?>         