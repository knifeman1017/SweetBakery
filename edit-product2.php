<?php
if(isset($_GET["txtID"])==FALSE){
    header("location:admin-product.php");
    exit();
}
//lay ma so va don gia cua san pham muon thay doi gia
$ms=$_GET["txtID"];
$dg=$_GET["txtPrice"];

include_once '../SweetBakery/lib/connect.inc';
$sql="update tb_product set product_price =$dg where product_id=$ms";
mysqli_query($link, $sql);
if(mysqli_errno($link)){
    echo "<h2>Loi:" +mysqli_errno($link) + "</h2>";
}else{
    header("location:admin-product.php");
}
?>

