<?php
include_once '../SweetBakery/lib/connect.inc';
session_start();

//kiem tra trang co nhan tham so id khong?
if(isset($_GET["id"])==FALSE){
    //quay ve trang san pham
    header("product.php");

    exit();
}

//lay ma so san pham dat mua
$ms = $_GET["id"];

//kiem tra ma so san pham $ms da co trong gio hang chua
if(isset($_SESSION["cart"][$ms])==FALSE){
    //truong hop chua co mat hang nay trong gio hang

    $sql = "Select * from tb_product where product_id like '$ms'";
    $result  = mysqli_query($link,$sql);

    //luu san pham $p vao gio hang
    $_SESSION["cart"][$ms]=$result;
}


header("product.php");
?>


