<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="../SweetBakery/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- SweetsBakery. logo-->
    <link rel="icon" href="../SweetBakery/images/logo.jpg">


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
    <a href="admin-product.php"><i class    ="fa fa-fw fa-list-alt"></i>FOOD MENU</a>
    <a href="admin-order.php"><i class="fa fa-fw fa-opencart"></i>FOOD ORDER</a>
    <a href="admin-membership.php"><i class="fa fa-fw fa-newspaper-o"></i>CUSTOMER MEMBERSHIP</a>
    <a href="admin-feedback.php"><i class="fa fa-fw fa-envelope "></i>CUSTOMER FEEDBACK</a>
    <a href="admin-account.php"><i class="fa fa-fw fa-user"></i> ADMIN ACCOUNT</a>
</div>
<div class="main">
    <form>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">CREAT NEW PRODUCTS</h3>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <h4 id="wronginfo" style="color: red"></h4>
                        <div class="form-group">
                            <label>CAMPAIGN NAME</label>
                            <input  type="text" class="form-control" name="txtName" required="" pattern="[A-Za-z 0-9]{3,50}" placeholder="Product name must be 3-50 characters" >
                            <label>CAMPAIGN DESCRIPTION</label>
                            <textarea  type="text" class="form-control" name="txtDes" required="" cols="10" rows="5" maxlength="300" placeholder="Optional" ></textarea>
                            <label>IMAGES (.png)</label>
                            <input  type="file" class="form-control" name="fileImages" id="fileImages" required="" accept="images/png" title="Please upload the product image">

                            <label>PRICE</label>
                            <input  type="number" class="form-control" name="numPrice" min="10000" max="600000" required="" placeholder="Price must be between 1000 and 1000000" >
                            <label>CATEGORY</label>
                            <select class="form-control" name="txtCate"required="">
                                <option value="" selected="" disabled="">---Please select---</option>
                                <option value="banhmi"> Bánh Mì</option>
                                <option value="banhngot">Bánh Ngọt</option>
                                <option value="banhkem">Bánh Kem</option>
                                <option value="donggoi">Đóng gói</option>
                                <option value="theomua">Theo mùa</option>
                                <option value="khac">Khác</option>
                            </select>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" name="submit" value="Create" class="btn btn-info">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $id = $_POST["txtID"];
        $name = $_POST["txtName"];
        $description = $_POST["txtDes"];
        $price = $_POST["numPrice"];
        $category = $_POST["txtCate"];
        include_once '../SweetBakery/lib/connect.inc';
        $sql = "insert into tb_product (product_id,product_name,product_description,product_price,product_category) values ('$id','$name','$description',$price,'$category')";
        $result = mysqli_query($link, $sql);
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

