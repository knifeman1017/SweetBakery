<?php

$host = "127.0.0.1";
$user="root";
$pwd="";
$database="product";
//ket noi den CSDL TestDB1
$link= mysqli_connect($host, $user, $pwd, $database);
if($link==NULL){
    die("<h2>FAIL CONNECT TO DATABASE !!!</h2>");
}
mysqli_set_charset($link, "utf8");
?>

