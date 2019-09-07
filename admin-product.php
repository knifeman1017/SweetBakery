<!DOCTYPE html>
<?php
include_once '../SweetBakery/lib/connect.inc';


if (mysqli_errno($link)) {
    echo mysqli_error($link);
    exit();
}
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 4;
$offset = ($pageno - 1) * $no_of_records_per_page;



$total_pages_sql = "SELECT COUNT(*) FROM tb_product";
$result = mysqli_query($link, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM tb_product LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($link, $sql);
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
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="sidebar">
            <a href="admin-Index.php"><i class="fa fa-fw fa-home"></i> HOME</a>
            <a href="admin-product.php"><i class="fa fa-fw fa-list-alt"></i>FOOD MENU</a>
            <a href="admin-order.php"><i class="fa fa-fw fa-opencart"></i>FOOD ORDER</a>
            <a href="admin-membership.php"><i class="fa fa-fw fa-newspaper-o"></i>CUSTOMER MEMBERSHIP</a>
            <a href="admin-feedback.php"><i class="fa fa-fw fa-envelope "></i>CUSTOMER FEEDBACK</a>
            <a href="admin-account.php"><i class="fa fa-fw fa-user"></i> ADMIN ACCOUNT</a>
        </div>
        <div class="main">    
            <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">Add, Edit or Delete Menu Items</h3><br>

            <a href="Create-product.php" class="btn btn-primary" >Add New Product</a><br><br>
            <table class="table table-hover table-bordered display"style="max-width: 100%">
                <thead class="modal-title" style="font-weight: bolder;color: #A82128;background-color: #000">
                    <tr style="background-color: #A82128; color: wheat">
                        <th>Product ID</th>
                        <th class="value4">Product Name</th>
                        <th>Description</th>                                      
                        <th>Images</th>
                        <th>Price</th>
                        <th>Product Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($p = mysqli_fetch_array($res_data)) {
                        echo "<tr>";
                        echo "<td>$p[0]</td>";
                        echo "<td>$p[1]</td>";
                        echo "<td>$p[2]</td>";
                        echo "<td><img src='../SweetBakery/Images/$p[3]' style='width:100%'/></td>";
                        echo "<td>$p[4]</td>";
                        echo "<td>$p[5]</td>";
                        echo "<td><a type='button' href='test.php?id=$p[0]' class='btn btn-info'><i class='glyphicon glyphicon-pencil' style='color: wheat' ></i></a>";
                        echo "<a type='button' href='delete-Product.php?id=$p[0]' onclick='return confirm(\"Are u sure?\")' class='btn btn-danger'> <i class='glyphicon glyphicon-trash' style='color: wheat' ></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
                <!-- Phan trang -->
                <ul class="pagination pagination-lg justify-content-center" style="margin-left: 400px;" >
                    <li class="page-item"><a class="page-link" href="?pageno=1"> First </a></li>
                    <li class="page-item <?php
                    if ($pageno <= 1) {
                        echo 'disabled';
                    }
                    ?>">
                        <a class="page-link" href="<?php
                        if ($pageno <= 1) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno - 1);
                        }
                        ?>"> Prev </a>
                    </li>
                    <li class="page-item <?php
                    if ($pageno >= $total_pages) {
                        echo 'disabled';
                    }
                    ?>">
                        <a class="page-link" href="<?php
                        if ($pageno >= $total_pages) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno + 1);
                        }
                        ?>"> Next </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>"> Last </a></li>
                </ul>
                <!-- Ket thuc phan trang -->
        </div>

    </body>


</html>
