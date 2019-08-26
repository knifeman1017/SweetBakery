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
        <link href="../SweetBakery/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">

            <form>
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
                                    <input  type="text" class="form-control" name="txtName" value="<?php echo $sp[1]; ?>" required="" >
                                    <label>PRODUCT DESCRIPTION</label>
                                    <input  type="text" class="form-control" name="txtDes" value="<?php echo $sp[2]; ?>" required="" >
                                    <label>Images(.png) </label>
                                    <input  type="file" class="form-control" name="fileImages" id="fileToUpload" required="" accept="image/png"  title="Please upload the product image">
                                    <label>PRICE</label>
                                    <input  type="number" class="form-control" name="numPrice" value="<?php echo $sp[4]; ?>" min="10000" max="600000"  required="" >
                                    <label>CATEGORY</label>
                                    <input  type="text" class="form-control" name="txtCate" value="<?php echo $sp[5]; ?>" readonly="" >
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <input type="submit" name="submit" value="Submit" class="btn btn-info">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_GET["submit"]) == TRUE) {

                $ms = $_GET["txtID"];
                $name = $_GET["txtName"];
                $desc = $_GET["txtDes"];
                $img = $_GET["fileImages"];
                $dg = $_GET["numPrice"];
                $sql = "update tb_product set product_name='$name', product_price=$dg, product_description ='$desc',images='$img' where product_id='$ms'";
                mysqli_query($link, $sql);
                if (mysqli_errno($link)) {
                    echo "<h2>Loi:" + mysqli_errno($link) + "</h2>";
                    exit();
                }
                header("location:admin-product.php");
            }
            ?>

        </div>
    </body>
</html>
