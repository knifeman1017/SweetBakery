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
            <h2>Thong tin san pham</h2>
            <hr>            
            <form action="edit-product2.php">
                <input type="hidden" name="txtID" value="<?php echo $ms[0]; ?>"/><br>
                Name:<br><input name="txtName" value="<?php echo $sp[1]; ?>" readonly/><br><br>
                Price:<br><input name="txtPrice" value="<?php echo $sp[2]; ?>" type="number" min="10000" max="200000" required/><br><br>
                <input type="submit" name="btnOK" value="Submit" class="btn btn-danger">
                <input type="reset" name="btnReset" value="Reset" class="btn btn-info">
                       
            </form>
        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>
