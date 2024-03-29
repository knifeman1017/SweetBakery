<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- SweetsBakery. logo-->
        <link rel="icon" href="../images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="sidebar">
            <a href="admin-Index.php"><i class="fa fa-fw fa-home"></i> HOME</a>
            <a href="admin-product.php"><i class="fa fa-fw fa-list-alt"></i>FOOD MENU</a>
            <a href="admin-order.php"><i class="fa fa-fw fa-opencart"></i>FOOD ORDER</a>
            <a href="admin-membership.php"><i class="fa fa-fw fa-newspaper-o"></i>CUSTOMER MEMBERSHIP</a>
            <a href="admin-feedback.php"><i class="fa fa-fw fa-envelope "></i>CUSTOMER FEEDBACK</a>
            <a href="admin-account.php"><i class="fa fa-fw fa-user"></i> ADMIN ACCOUNT</a>
        </div>
        <div class="main">
            <form enctype="multipart/form-data">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">CREAT NEW PRODUCTS</h3>
                        </div>

                        <div class="form-group">
                            <label>Store ID</label>
                            <input  type="text" class="form-control" name="txtID"  required="" pattern="[A-Z 0-9]{3,5}"  >
                            <label>Store name</label>
                            <input  type="text" class="form-control" name="txtName" required="" pattern="[A-Za-z 0-9]{3,50}" placeholder="Product name must be 3-50 characters" >
                            <label>Dia chi</label>
                            <input type="text" class="form-control" name="txtaddress" required="" pattern="[A-Za-z 0-9]{3,500}" placeholder="Nhập địa chỉ" > <br>
                            <label>ngay dang ky</label>
                            <input type="date" class="form-control" name="txtDate">
                            <label>Thành phố</label>
                            <select class="form-control" name="txtCity"required="">
                                <option value="" selected="" disabled="">---Please select---</option>
                                <option value="HCM"> Hồ Chí Minh</option>
                            </select>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" name="submit" value="Create" class="btn btn-info">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </div>
                </div>
                        <?php
                        include_once '../SweetBakery/lib/connect.inc';
                        if (isset($_POST["Create"])) {
                            $id = $_POST["txtID"];
                            $name = $_POST["txtName"];
                            $diachi = $_POST["txtaddress"];
                            $Thannhpho = $_POST["txtCity"];
                            $ngaydangky = $_POST["txtDate"];

                            $sql = "update tb_store set id='$id', Name store='$name', dia chi ='$diachi', ngay dang ki cua hang='$ngaydangky";
                            $rs = mysqli_query($cn, $sql);
                            if ($rs == true) {
                                $imgValid = 1;
                            } else {
                                echo '<script>alert("Update failed! This product name has been used. ");</script>';
                                echo "<script> parent.location.reload(); </script>";
                        }}
                            ?>
                            <?php
                            if (isset($_POST["submit"])) {
                                $id = $_POST["txtID"];
                                $name = $_POST["txtName"];
                                $diachi = $_POST["txtaddress"];
                                $Thannhpho = $_POST["txtCity"];
                                $ngaydangky = $_POST["txtDate"];
                                include_once '../SweetBakery/lib/connect.inc';
                                $sql = "update tb_store set id='$id', Name store='$name', dia chi ='$diachi', ngay dang ki cua hang='$ngaydangky";
                                $rs = mysqli_query($cn, $sql);
                                if (mysqli_errno($link)) {
                                    echo mysqli_error($link);
                                    exit();
                                }
                                header('location:admin-product.php');
                            }
                            ?>
                    </div>
                    </body>
</html>
