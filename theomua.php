<!DOCTYPE html>
<!--

-->
<?php
include_once '../SweetBakery/lib/connect.inc';
$sql = "select * from tb_product where product_category='Theomua'";
$result = mysqli_query($link, $sql);
if (mysqli_errno($link)) {
    echo mysqli_error($link);
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product</title>
        <link href="css/css/product.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <h1>Sản Phẩm</h1>
        <br>
        <!-- Tab links -->
        <div class="tab" >
            <button class="tablinks" onclick="openCity(event)"><a href="banhkem.php">Bánh Mì</a></button>
            <button class="tablinks" onclick="openCity(event)"><a href="banhngot.php">Bánh Ngọt</a></button>
            <button class="tablinks" onclick="openCity(event)"><a href="banhkem.php">Bánh Kem</a></button>
            <button class="tablinks" onclick="openCity(event)"><a href="donggoi.php">Đóng Gói</a></button>
            <button class="tablinks" onclick="openCity(event, 'Theomua')">Theo mùa</button>
            <button class="tablinks" onclick="openCity(event)"><a href="khac.php">Khác</a></button>
        </div>

        <!-- Tab content -->
        <div id="Theomua" class="tabcontent">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_row($result)) {
                    echo "<div class='column'>";
                    echo"<div class='card'>";
                    echo "<img src='../SweetBakery/Images/$row[3]' style='width:100%'/>";
                    echo "<div class='container'>";
                    echo "<h2>$row[1]</h2>";
                    echo "<p>$row[2]</p>";
                    echo "<p>$row[4]đ</p>";
                    echo "<p><button class='button'>Order</button></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

    </div>
</div>

<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks, button;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        button = document.getElementsByClassName("button");
        for (i = 0; i < button.length; i++) {
            button[i].className = button[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<?php
// put your code here
?>
</body>
</html>