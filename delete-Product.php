<?php

if (isset($_GET["id"]) == FALSE) {
    header("location:admin-product.php");
    exit();
}
$ms = $_GET["id"]; //lay ma so sp muon doi gia
include_once '../SweetBakery/lib/connect.inc';
$sql = "delete from tb_product where product_id =$ms";
mysqli_query($link, $sql);

if (mysqli_errno($link)) {
    echo "<h2>Loi: "+ mysqli_error($link)+"</h2>";
}else{
    header("location:admin-product.php");
}
?>

