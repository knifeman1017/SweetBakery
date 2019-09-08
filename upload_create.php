<?php

$target_dir = "../SweetBakery/Images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["add"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {

        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "png") {
        echo "Sorry, only PNG files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $ms = $_POST["txtID"];
            $name = $_POST["txtName"];
            $desc = $_POST["txtDes"];
            $img = basename($_FILES["fileToUpload"]["name"]);
            $dg = $_POST["numPrice"];
            $cate = $_POST["txtCate"];
            include_once '../SweetBakery/lib/connect.inc';
            $sql = "insert into tb_Product (product_id,product_name,product_description,Images,product_price,product_category) values ('$ms','$name','$desc','$img',$dg,'$cate')";
            mysqli_query($link, $sql);
            if (mysqli_errno($link)) {
                echo "<h2>Loi:" + mysqli_errno($link) + "</h2>";
                exit();
            }
            header("location:admin-product.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


}
?>