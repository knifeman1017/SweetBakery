<!DOCTYPE html>
<?php
include_once '../SweetBakery/lib/connect.inc';
$sql = "select * from tb_store";
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
            <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">Add, Edit or Delete Store</h3><br>
      
            <a href="create-store.php.php" class="btn btn-primary" >Add New Store</a><br><br>
            <table class="table table-hover table-bordered display"style="max-width: 100%">
                <thead class="modal-title" style="font-weight: bolder;color: #A82128;background-color: #000">
                    <tr style="background-color: #A82128; color: wheat">
                        
                        <th>Store ID</th>
                        <th>Store name</th>
                        <th>Dia chi</th>                                      
                        <th>ngay dang ky</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";           
                        echo "<td>$row[3]</td>";
             
                        
                    }
                    ?>
                       </tbody>
        </div>

    </body>
</html>

