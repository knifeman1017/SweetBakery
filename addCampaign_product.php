<?php
include_once '../SweetBakery/lib/connect.inc';
session_start();

if(isset($_GET["id"])==FALSE){
    //quay ve trang san pham
    header("location:getCampaign_product.php");
    exit();
}
//lay ma so san pham them vao chien dich
$ms = '%'.$_GET["id"].'%';

//kiem tra ma so san pham $ms da co trong Camp chua
if(isset($_SESSION["proCamp"][$ms])==FALSE) {
    //truong hop chua co mat hang nay trong gio hang

    //tim san pham co ma so $ms trong database
    $sql = "select * from tb_product where product_id like '$ms'";
    $result = mysqli_query($link, $sql);
    if (mysqli_errno($link)) {
        echo mysqli_error($link);
        exit();
    } else {
        $_SESSION["proCamp"][$ms] = $result;
        echo "Success!";
    }
}
?>
