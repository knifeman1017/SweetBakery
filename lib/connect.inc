<?php

$host = "localhost";
$user="root";
$pwd="";
$database="sweetbakery";
//ket noi den CSDL TestDB1
$link= mysqli_connect($host, $user, $pwd, $database);
if($link==NULL){
    die("<h2>FAIL CONNECT TO DATABASE !!!</h2>");
}
mysqli_set_charset($link, "utf8");

class Product{
    //tao thuoc tinh
    public $proID, $proName,$proDesc, $image, $price,$procategory, $qty;

    //ham dung
    public function __construct($proID,$proName,$proDesc,$image,$gia,$procategory,$soluong){
        $this->proID = $proID;
        $this->proName = $proName;
        $this->proDesc =$proDesc;
        $this->image = $image;
        $this->price = $gia;
        $this->procategory=$procategory;
        $this->qty = $soluong;
    }
}

?>

