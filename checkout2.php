<?php
include_once '../SweetBakery/lib/data.inc';
//kiem tra nut check-out da duoc bam hay chua

session_start();
//da co gio hang: lay noi dung gio hang -> bien order
$order = $_SESSION["cart"];
$customer = $_SESSION["customer"];
echo '<pre>';
print_r($order);
echo '</pre>';
echo $customer->customer_id;
if(isset($_GET["btnConfirm"])){
    include_once 'lib/connect.inc';
    $sql = "select max(order_id) as max from tb_order";
    $result1 = mysqli_query($link,$sql);
    $row=mysqli_fetch_row($result1);
    $order_id = $row[0];
    $sql1 = "insert into tb_order values (null,'$customer->customer_id','2019-09-13',0,'2019-09-15',null)";
    mysqli_query($link,$sql1);
    $grand = 0;
    foreach($order as $p){
        $amt = $p->product_price*$p->qty;
        $grand+=$amt;
        $sql2 = "insert into tb_orderitem values ($order_id,'$p->product_id',$p->qty,$amt)";
        mysqli_query($link,$sql2);
    }





}
?>