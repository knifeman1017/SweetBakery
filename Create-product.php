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


        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
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
                                    <label>PRODUCT ID</label>
                                    <input  type="text" class="form-control" name="txtID"  required="" pattern="[A-Z 0-9]{3,5}"  >
                                    <label>PRODUCT NAME</label>
                                    <input  type="text" class="form-control" name="txtName" required="" pattern="[A-Za-z 0-9]{3,50}" placeholder="Product name must be 3-50 characters" >
                                    <label>PRODUCT DESCRIPTION</label>
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
            if (isset($_GET["submit"]) == TRUE) {
                $id = $_GET["txtID"];
                $name = $_GET["txtName"];
                $description = $_GET["txtDes"];
                $images = $_GET["fileImages"];
                $price = $_GET["numPrice"];
                $category = $_GET["txtCate"];
                include_once '../SweetBakery/lib/connect.inc';
                $sql = "insert into tb_product (product_id,product_name,product_description,Images,product_price,product_category) values ('$id','$name','$description','$images',$price,'$category')";
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

