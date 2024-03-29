
<!DOCTYPE html>
<html>
    <head>
        <title>SweetsBakery - SignUp</title>

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
         <?php include_once '../SweetBakery/menu_visitor.inc'?>
        
        <!--tạo tài khoản -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                       
                        <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">CREATE AN ACCOUNT</h3>
                    </div>
                    <form action="#" method="post" id="frSignup">
                        <div class="modal-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="CusName">Full name</label>
                                    <input  type="text" class="form-control" name="CusName" id="CusName" required="" title="Please type your full name" placeholder="Name"  pattern="[A-Z a-z0-9]{5,30}">
                                </div>
                                <div class="form-group">
                                    <label for="CusTel">Phone</label>
                                    <input  type="text" class="form-control" name="CusTel" id="CusTel" required="" title="Please type your telephone number "  placeholder="Phone" pattern="[0-9]{10,11}">
                                </div>
                                <div class="form-group">
                                    <label for="CusMail">Email</label>
                                    <input  type="email" class="form-control" name="CusMail" id="CusMail" required="" title="Please type your email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <label for="CusID">Account ID</label>
                                    <input  type="text" class="form-control" name="CusID" id="CusID" required="" title="Please type your account ID " placeholder="At least 5 characters"  pattern="[A-Za-z0-9_]{5,30}">
                                </div>
                                <div class="form-group">
                                    <label for="CusPass">Password</label>
                                    <input type="password" class="form-control" name="CusPass" id="CusPass" required="" title="Please type your password"  placeholder="At least 5 characters" pattern="[A-Za-z0-9]{5,30}">
                                </div>
                                <div class="form-group">
                                    <label for="confirmPass"> Confirm password </label>
                                    <input class="form-control" id="confirmPass" type="password" required="">
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnCreate">Create</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
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
<?php
     if (isset($_POST["btnCreate"]) == TRUE) {
    $cusID = $_POST["CusID"];
    $pass = $_POST["CusPass"];
    $cusName = $_POST["CusName"];
    $cusEmail = $_POST["CusMail"];
    $cusTel = $_POST["CusTel"];
    
    include_once './lib/connect.inc';
    $sql = "insert into tb_customer (customer_id, customer_password, customer_name, customer_email, customer_tel) "
            . "values('$cusID','$pass','$cusName','$cusEmail','$cusTel')";
    
    $result = mysqli_query($link, $sql);
                //kiem tra ket qua thuc hien
                if(mysqli_errno($link)){
                    echo mysqli_error($link);
                    exit();
                }
                echo "<br><h3> Create new account !!!!</h3>";
     }
?>