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
    </head>
    <body>
        <div class="container">
            <h2>Add, Edit or Delete Menu Items</h2>
            <a href="Create.php">Add New Product</a><br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
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
                        echo "<td><img src='../Images/$row[3]' style='width:100%'/></td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[5]</td>";
                        echo "<td><a href='edit-Product.php?id=$row[0]'>Edit</a>|";
                        echo "<a href='delete-Product.php?id=$row[0]'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
        </div>

    </body>
</html>
