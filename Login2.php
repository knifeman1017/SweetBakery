<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <!-- SweetsBakery. logo-->
        <link rel="icon" href="../SweetBakery/Images/logo.jpg">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <title>SweetsBakery - Login</title>

        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />


        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background: url(images/logo.jpg);">
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

        <div class="container w-50 border border-primary" style="border-radius: 25px;margin-top: 10%; background: white;">
            <h1 class="mt-5" align="center">LOGIN ADMIN</h1>
            <hr/>        
            <form method="post">
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
    </body>
</html>
<?php
//kiem tra nut submit da duoc bam chua
if (isset($_POST["btLogin"]) == TRUE) {
    // lay du lieu trong 2 o username, password
    $taikhoan = $_POST['txtUser'];
    $password = $_POST["txtPass"];
echo $taikhoan;
echo $password;
    // tao ket noi voi db
    include_once '../SweetBakery/lib/connect.inc';

    //tao linh truy van
    $sql = "SELECT * FROM tb_customer WHERE customer_id like '$taikhoan'";
    echo $sql;
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
    if ($row[1] == $password) {
        header("Location: product.php");
    }
     else {
            die("<h3>mat ma ko dung vui long nhap lai</h3>");
        }
}
?>      