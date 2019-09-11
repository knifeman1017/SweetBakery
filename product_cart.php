<?php
include_once '../SweetBakery/lib/connect.inc';
include_once  '../SweetBakery/lib/data.inc';
session_start();

//kiem tra trang co nhan tham so id khong?
if(isset($_GET["id"])==FALSE){
    //quay ve trang san pham
    header("location:product.php");

    exit();
}

//lay ma so san pham dat mua
$ms = $_GET["id"];

//kiem tra ma so san pham $ms da co trong gio hang chua
if(isset($_SESSION["cart"][$ms])==FALSE){
    //truong hop chua co mat hang nay trong gio hang

    //tim san pham co ma so $ms trong danh sach proList
    $p = search($ms,$proList);

    //luu san pham $p vao gio hang
    $_SESSION["cart"][$ms]=$p;

}
header("location:product.php");
?>

