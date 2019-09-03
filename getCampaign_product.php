<!DOCTYPE html>
<?php
include_once '../SweetBakery/lib/connect.inc';
$sql = "select * from tb_product";
$result = mysqli_query($link, $sql);
if (mysqli_errno($link)) {
    echo mysqli_error($link);
    exit();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="../SweetBakery/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- SweetsBakery. logo-->
    <link rel="icon" href="../SweetBakery/images/logo.jpg">


    <!--CSS FRAMEWORK-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
    <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
    <link href="css/animate.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/menu.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="sidebar">
    <a href="admin-Index.php"><i class="fa fa-fw fa-home"></i> HOME</a>
    <a href="admin-product.php"><i class    ="fa fa-fw fa-list-alt"></i>FOOD MENU</a>
    <a href="admin-order.php"><i class="fa fa-fw fa-opencart"></i>FOOD ORDER</a>
    <a href="admin-membership.php"><i class="fa fa-fw fa-newspaper-o"></i>CUSTOMER MEMBERSHIP</a>
    <a href="admin-feedback.php"><i class="fa fa-fw fa-envelope "></i>CUSTOMER FEEDBACK</a>
    <a href="admin-account.php"><i class="fa fa-fw fa-user"></i> ADMIN ACCOUNT</a>
</div>
<div class="main" style="margin-left: 30%">
   <div class="row">
       <div class="col-lg-8">
           <h3>Product List</h3>
           <table class="table table-hover table-bordered display"style="max-width: 100%">
               <thead class="modal-title" style="font-weight: bolder;color: #A82128;background-color: #000">
               <tr style="background-color: #A82128; color: wheat">
                   <th>Product Name</th>
                   <th>Images</th>
                   <th>Price</th>
                   <th>Product Category</th>
                   <th>Action</th>
               </tr>
               </thead>
               <tbody>
               <?php
               while ($row = mysqli_fetch_row($result)) {
                   echo "<tr>";
                   echo "<td>$row[1]</td>";
                   echo "<td><img src='../SweetBakery/Images/$row[3]' style='width:50%'/></td>";
                   echo "<td>$row[4]</td>";
                   echo "<td>$row[5]</td>";
                   echo "<td><a type='button' href='edit-Product.php?id=$row[0]' class='btn btn-info'><i class='glyphicon glyphicon-plus-sign' style='color: wheat' ></i></a></td>";

                   echo "</tr>";
               }
               ?>
               </tbody>
           </table>
       </div>
       <div class="col-lg-3 panel">
           <h3>Campaign info</h3>

           <?php
           $campname = $_GET["txtName"];
           $campdesc = $_GET["txtDes"];
           $campstatus = $_GET["rdCamp"];
           $campfrom = $_GET["dateFrom"];
           $campto = $_GET["dateTo"];

           echo "Campaign Name: $campname<br>";
           echo "Campaign Description: $campdesc<br>";
           echo "Campaign Status: $campstatus<br>";
           echo "From Date: $campfrom<br>";
           echo "To Date: $campto<br>";
           ?>
       </div>
   </div>

</div>
</body>
</html>

