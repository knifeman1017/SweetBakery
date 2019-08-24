<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Create New Products </h2>
            <hr>
            <form>
                Product ID:<input type="text" name="txtID" required=""><br><br>
                Product Name:<input type="text" name="txtName" required=""><br><br>
                Product Description:<input type="text" name="txtDes" required=""><br><br>
                Images:<input type="text" name="txtImages" required=""><br><br>
                Price:<input type="number" name="numPrice" required=""><br><br>
                Category:<input type="text" name="txtCate" required=""><br><br>
                <input type="submit" name="submit" value="Create">
            </form>
        <?php
        if (isset($_GET["submit"]) == TRUE) {
            $id = $_GET["txtID"];
            $name = $_GET["txtName"];
            $description = $_GET["txtDes"];
            $images=$_GET["txtImages"];
            $price=$_GET["numPrice"];
            $category=$_GET["txtCate"];
            include_once '../SweetBakery/lib/connect.inc';
            $sql = "insert into tb_product (product_id,product_name,product_description,Images,product_price,product_category) values ('$id','$name','$description','$images',$price,'$category')";
            $result = mysqli_query($link, $sql);
            if(mysqli_errno($link)){
                echo mysqli_error($link);
                exit();
            }
            header('location:admin-product.php');
            
        }
        ?>
        </div>
    </body>
</html>

