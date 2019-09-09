<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <!-- SweetsBakery. logo-->
        <link rel="icon" href="../SweetBakery/images/logo.jpg">
        <title>Login Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background: url(images/logo.jpg);">
        <div class="container w-50 border border-primary" style="border-radius: 25px;margin-top: 10%; background: white;">
            <h1 class="mt-5" align="center">LOGIN ADMIN</h1>
            <hr/>        
            <form method="get">
                <div class="form-group row text-right">
                    <label for="user" class="font-weight-bold col-sm-3 col-form-label ">User</label>
                    <div class="col-sm-9">
                        <input type="text" id="user" name="user" class="form-control w-75" placeholder="Enter User" required />
                        
                    </div>
                </div>
                <div class="form-group row text-right">
                    <label for="pass" class="font-weight-bold col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="pass" name="pass" class="form-control w-75" placeholder="Enter Password">
                    </div>
                </div>
                <div class="form-group mb-5" align="center">
                    <input class="form-control-sm btn btn-primary" type="submit" value="Login" name="btLogin" />
                    <input type="reset" class="form-control-sm btn btn-info" value="Reset">
                </div>
            </form>
           
        </div>
    </body>
</html>
<?php
  // tao ket noi voi db
    include_once '../SweetBakery/lib/connect.inc';
//kiem tra nut submit da duoc bam chua
if (isset($_GET["btLogin"]) == TRUE) {
    // lay du lieu trong 2 o username, password
    $user = $_GET["user"];
    $password = $_GET["pass"];

  

    //tao linh truy van
    $sql = "select * from tb_admin where admin_id = '$user'";

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
    if( ($row[1] == $password)||($row[2] == 1)) {
        // tai khoan va mat khau hop le => chuyen trang 
       
         
     
            header("Location: admin-index.php");
        
       
       
    }
     else {
            die("<h3>mat ma ko dunh vui long nhap lai</h3>");
        }
}
?>      