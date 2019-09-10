<?php



include_once './lib/connect.inc';
if (isset($_POST["MemberName"])) {
    $name = $_POST["MemberName"];
    $id = $_POST["MemberID"];
    $tel = $_POST["MemberTel"];
    $mail = $_POST["MemberMail"];
    $pass = $_POST["MemberPass"];
    $oldpass = $_POST["OldMemberPass"];

    $sql1 = "select customer_password from tb_customer where customer_id = '$id'";
    
    
    
    $rs1 = mysqli_query($link, $sql1);
    $r = mysqli_fetch_assoc($rs1);

    if ($r["customer_password"] == $pass) {
        echo "repeat";
    } else if ($r["customer_password"] != $oldpass) {
        echo "wrong";
    } else if (strlen(trim($name)) <= 0 || strlen(trim($id)) <= 0 || strlen(trim($tel)) <= 0 || strlen(trim($mail)) <= 0 || strlen(trim($pass)) <= 0) {
        echo "space";
    } else {
        $sql = "UPDATE `tb_customer` SET customer_name ='$name', `customer_password`='$pass',`customer_email`='$mail',`customer_tel`='$tel' WHERE `customer_id`='$id'";
        $result = mysqli_query($link, $sql);

        if ($result == false) {
            echo "wrongEmail";
        } else {
            echo "yes";
        }
    }
    mysqli_close($link);
}

