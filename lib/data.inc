<?php
include_once 'connect.inc';
class   Product{
}

$sql = "select * from tb_product";
$result = mysqli_query($link,$sql);

while ($p = mysqli_fetch_object($result,'Product')) {
    $proList[] =$p;
}
//ham tim kiem san pham theo ma so, ten san pham, loai san pham
function search($ms,$ds){
    foreach ($ds as $item){
        if($item->product_id == $ms||$item->product_name==$ms||$item->product_category==$ms){
            return $item;
        }
    }
    return NULL;
}
mysqli_free_result($result);