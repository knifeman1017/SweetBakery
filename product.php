<!DOCTYPE html>
<!--

-->
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
        <title>Product</title>

    </head>
    <style>
        h2{
            color: #A82128;
        }
        h1{
            text-align: center;
            color:#A82128;
        }
        /* Style the tab */
        .tab {
            overflow: hidden;
            background-color: white;
            width: 500px;

        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;

        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ccc;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ddd;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
        }
        .tablinks{
            color:#A82128;
        }
        body{
            background-color:white;
        }
        /* Three columns side by side */
        .column {
            float: left;
            width: 15%;
            margin-bottom: 16px;
            padding: 0 8px;

        }

        /* Display the columns below each other instead of side by side on small screens */
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        /* Add some shadows to create a card effect */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            background-color: wheat;
        }

        /* Some left and right padding inside the container */
        .container {
            padding: 0 16px;
        }

        /* Clear floats */
        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }
        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 5px;
            color: #ddd;
            background-color: #FF5B36;
            text-align: center;
            cursor: pointer;
            width: 50%;
        }

        .button:hover {
            background-color: #2ECC71;
        }

    </style>
    <body>

        <h1>Sản Phẩm</h1>
        <br>
        <!-- Tab links -->
        <div class="tab" >
            <button class="tablinks" onclick="openCity(event, 'Banhmi')">Bánh Mì</button>
            <button class="tablinks" onclick="openCity(event, 'Banhngot')">Bánh Ngọt</button>
            <button class="tablinks" onclick="openCity(event, 'Banhkem')">Bánh Kem</button>
            <button class="tablinks" onclick="openCity(event, 'Theomua')">Theo mùa</button>
            <button class="tablinks" onclick="openCity(event, 'Khac')">Khác</button>
        </div>

        <!-- Tab content -->
        <div id="Banhmi" class="tabcontent">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <?php
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<img src='../Images/$row[3]' style='width:100%'/>";
                            echo "<div class='container'>";
                            echo "<h2>$row[1]</h2>";
                            echo "<p>$row[2]</p>";
                            echo "<p>$row[4]</p>";
                            echo "<p><button class='button'>Order</button></p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <div id="Banhngot" class="tabcontent">
            <div class="row">
                <div class="column">
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>

        <div id="Banhngot" class="tabcontent">
            <div class="card">

            </div>
        </div>
        <div id="Banhkem" class="tabcontent">

        </div>
        <div id="Theomua" class="tabcontent">

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
