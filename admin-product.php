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
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- SweetsBakery. logo-->
        <link rel="icon" href="../images/logo.jpg">


        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />


        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            
            <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">Add, Edit or Delete Menu Items</h3><br>
      
            <a href="Create-product.php" class="btn btn-primary" >Add New Product</a><br><br>
            <table class="table table-hover table-bordered display"style="max-width: 100%">
                <thead class="modal-title" style="font-weight: bolder;color: #A82128;background-color: #000">
                    <tr style="background-color: #A82128; color: wheat">
                        
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Description</th>                                      
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
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td><img src='../SweetBakery/Images/$row[3]' style='width:100%'/></td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[5]</td>";
                        echo "<td><a type='button' href='edit-Product.php?id=$row[0]' class='btn btn-info'>Edit</a>";
                        echo "<a type='button' href='delete-Product.php?id=$row[0]' onlick='return confirm(\"Are u sure?\")' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                       </tbody>
        </div>

    </body>
</html>
