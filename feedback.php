
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
        <link href="../sweetbakery/css/style.css" rel="stylesheet" type="text/css"/>

         <link rel="icon" href="../SweetBakery/images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        
        
       
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>
    
    <body>
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
                            <li><a style="color: #FF5B35" href="feedback.php">Cửa hàng</a></li>
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

        <div class="container">
            <div class="left-b1">
                <h2>Liên hệ chúng tôi!</h2>
                <form action="handle_form.php" method="post">
                    <div class="agile1">
                        <h3>Name</h3>
                        <input type="text" name="Tên" class="name" placeholder="Tên của bạn" required="">
                    </div>
                    <div class="agile1">
                        <h3>Số điện thoại</h3>
                        <input type="text" name="telephone" class="telephone" placeholder="Số điện thoại liên hệ" required="">
                    </div>
                    <div class="agile1">
                        <h3>Email</h3>
                        <input type="text" name="email" class="email" placeholder="Email của bạn" required="">
                    </div>
                    <div class="agile1">
                        <h3>Phản hồi của bạn</h3>
                        <textarea  name="message" placeholder="Ý kiến góp ý"  required=""></textarea>
                    </div>	
                    <input type="submit" value="Gửi phản hồi">
                </form>
            </div>
            <div class="right-b2">
                <h3 class="b2">Theo giõi</h3>
                <form action="#" method="post">
                    <div class="agile1">
                        <h3>Địa chỉ Email</h3>
                        <input type="text" name="telephone" class="telephone" placeholder="" required="">
                    </div>
                    <input type="submit"  class="subscribe" value="Subscribe">
                </form>
                <h3 class="b2">Cửa hàng của chúng tôi</h3>
                <div class="agile1">
                    <p>
                    <h3>Địa chỉ:590 Cách Mạng Tháng 8,phường 11,quận 3</h3>
                    <div class="map">
                        </p>
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.325648981122!2d106.66413881428709!3d10.786351461961154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed23ca5d8db%3A0x24d414f45e5a523!2zNTkwIEPDoWNoIE3huqFuZyBUaMOhbmcgOCwgUGjGsOG7nW5nIDExLCBRdeG6rW4gMywgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1566728241137!5m2!1svi!2s" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>

                    </div>
                    <h3 class="b2">Stay In Touch</h3>
                    <div class="agile1">
                        <h3>Social Icons</h3>
                        <div class="socialicons w3">
                            <ul>
                                <li><a class="facebook" href="#"></a></li>
                                <li><a class="twitter" href="#"></a></li>
                                <li><a class="google" href="#"></a></li>
                                <li><a class="pinterest" href="#"></a></li>
                                <li><a class="linkedin" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-b2">
                        <p class="agileinfo"> &copy; 2019</p>
                    </div>
                </div>
                <div class="clear"></div>	
            </div>
    </body>
</html>
