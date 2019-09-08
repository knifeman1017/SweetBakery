<?php
// Include the database configuration file
include '../SweetBakery/lib/connect.inc';
$statusMsg = '';

// File upload path
$targetDir = "../SweetBakery/Images/";
$fileName = basename($_FILES["fileToUpload"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)){
            // Update image file name into database
            $ms=$_POST["id"];
            $sql = "update tb_product set Images = '$fileName' where product_id = '$ms'";
           
            
            $result = mysqli_query($link, $sql);
   
            if($result){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
