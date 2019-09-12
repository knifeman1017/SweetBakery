<?php

$target_dir = "../SweetBakery/Images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$oldimg = $_GET["img"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// Check if file already exists
IF (!file_exists($target_file)) {
// Check if image file is a actual image or fake image
    if (isset($_POST["save"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {

            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000000) {
        echo "<script> alert('Sorry, your images file is too large.'); </script>";
        echo "<script> window.location ='edit-product.php';</script>";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "png") {

        echo "<script> alert('Sorry, only PNG files are allowed.'); </script>";
        echo "<script> window.location ='edit-product.php';</script>";
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script> alert('Sorry, your images was not uploaded.'); </script>";
    echo "<script> window.location ='edit-product.php';</script>";
// if everything is ok, try to upload file
} else {
    $ms = $_POST["txtID"];
    $name = $_POST["txtName"];
    $desc = $_POST["txtDes"];

    $dg = $_POST["numPrice"];
    echo "Success";
    if (file_exists($target_file)) {
        $img = $oldimg;
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $img = basename($_FILES["fileToUpload"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    include_once '../SweetBakery/lib/connect.inc';
    $sql = "update tb_product set product_name='$name', product_price=$dg, product_description ='$desc', images='$img' where Product_id='$ms'";
    mysqli_query($link, $sql);
    if (mysqli_errno($link)) {
        echo "<h2>Loi:" + mysqli_errno($link) + "</h2>";
        exit();
    }
    echo "<script> alert('Edit Successfully'); </script>";
    echo "Success";
    header("location:admin-product.php");
}
?>

