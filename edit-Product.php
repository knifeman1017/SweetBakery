
<!DOCTYPE html>
<?php
if (isset($_GET["id"]) == FALSE) {
    header("location:admin-product.php");
    exit();
}
$ms = $_GET["id"]; //lay ma so sp muon doi gia
include_once '../SweetBakery/lib/connect.inc';
$sql = "select*from tb_product where product_id ='$ms'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) == 0) {
    echo '<h2> Bad request (id ko ton tai)!!</h2>';
    exit();
}
$sp = mysqli_fetch_row($result);
?>

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

        <form action="upload-edit.php?img=<?php echo $sp[3]; ?>" method="post" enctype="multipart/form-data">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">PRODUCTS</h3>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <h4 id="wronginfo" style="color: red"></h4>
                            <div class="form-group">
                                <label>PRODUCT ID</label>
                                <input  type="text" class="form-control" name="txtID" value="<?php echo $ms; ?>"readonly="" >
                                <label>PRODUCT NAME</label>
                                <input  type="text" class="form-control" name="txtName" value="<?php echo $sp[1]; ?>" >
                                <label>PRODUCT DESCRIPTION</label>
                                
                                 <textarea name="txtDes" class="form-control"  cols="10" rows="5" maxlength="300" ><?php echo $sp[2]; ?></textarea>
                                <label>IMAGES(.png)</label><br>
                                <img src='../SweetBakery/Images/<?php echo $sp[3]; ?>' style='width:25%'/><br>
                              
                                <input  type="file" class="form-control" name="fileToUpload" id="fileToUpload" title="Please upload the product image">
                                <label>PRICE</label>
                                <input  type="number" class="form-control" name="numPrice" value="<?php echo $sp[4]; ?>" min="10000" max="600000"  >
                                <label>CATEGORY</label>
                                <input  type="text" class="form-control" name="txtCate" value="<?php echo $sp[5]; ?>" readonly="" >
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" name="save" value="Save Changes" class="btn btn-info">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>
         
        </form>

    </div>
</body>
</html>
