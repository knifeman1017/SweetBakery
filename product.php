<!DOCTYPE html>
<!--

-->
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
                        <img src="../Images/Bread01-Baguette.png" alt=""style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Mì</h2>
                            <p>Những ổ bánh mì vàng đều với lớp vỏ ngoài giòn tan và phần ruột bên trong xốp mềm.</p><br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread02-Pizza-ABCT201.png" alt=""style="width:100%"/>
                        <div class="container">
                            <h2>Pizza</h2>                            
                            <p>Chiếc pizza có bánh đế giòn xốp được phủ bởi lớp phô mai béo ngậy, xúc xích và ớt chuông xanh.</p>                       
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread03-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Jambon Phô Mai</h2>
                            <p>Bánh mì tươi, mềm kết hợp với vị béo mằn mặn của lớp chà bông cùng sốt mayonnaise.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread04-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Mì Sốt Nắm</h2>
                            <p>Chiếc bánh thơm ngon mang mùi vị độc đáo đến từ sốt nấm và thịt ham.</p><br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread05-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Pizza Xúc Xích</h2>
                            <p>Phần ăn đầy đủ dinh dưỡng với xúc xích, thịt jambon cắt nhỏ và phô mai.</p><br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread06-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Mì Châu Âu</h2>
                            <p>Bên cạnh một chút vị ngọt nhẹ đến từ bánh mì, còn có chút vị mặn của chà bông và béo thơm của trứng cút.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Pastry02-.png" alt=""style="width:100%"/>
                        <div class="container">
                            <h2>Su kem</h2>
                            <p>Lớp vỏ giòn giòn, mềm và thơm phức với lớp kem béo mịn ngon tuyệt.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread07-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Đan Mạch Xúc Xích</h2>
                            <p>Lớp bánh đan mạch cuộc xúc xích được phủ thêm chà bông gà và sốt mayonnaise.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread08.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Mì Salad Kẹp</h2>
                            <p>Bánh mì mè kẹp thịt ham, phô mai, rau xà lách và cà chua thơm ngon và bổ dưỡng</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/Bread09-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Mì Salad</h2>
                            <p>Bánh mì kèp salad nhiều thành phần gồm jambon, cà rốt, bắp, bắp cải, dưa leo và sốt mayonaise.e sauce.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div id="Banhngot" class="tabcontent">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake08-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Blueberry Vani</h2>
                            <p>Chiếc bánh bốn tầng được làm từ những lớp bánh bông lan tươi mịn, lớp mousse blueberry thơm ngọt và lớp mousse kem sữa béo mịn.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake06-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Chocolate Cocoa</h2>
                            <p>Trải nghiệm từng tần hương vị của lớp bông lan mềm mịn, lớp kem mousse thơm béo và vị chocolate quyến rũ.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div> 
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake04-Mini-Black-Forest.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Black Forest</h2>
                            <p>Những chiếc Black Forest với kích thước nhỏ nhưng vẫn giữ được mùi vị sôcôla đặc trưng của mình.</p><br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake09-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Orange Vani</h2>
                            <p>Cảm nhận vị cam hòa quyện giữa lớp kem mousse béo ngọt và bánh bông lan mịn màng.</p>
                            <br><br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake02-.png" alt=""style="width:100%"/>
                        <div class="container">
                            <h2>Lemon Cream Cake</h2>
                            <p>Chiếc bánh nhỏ nhắn mang vị chanh nhẹ nhàng sẽ làm tươi mới mọi vị giác của bạn.</p>
                            <br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake01-.png" alt=""style="width:100%"/>
                        <div class="container">
                            <h2>Chocolate Almond Cake</h2>                            
                            <p>Được làm từ bông lan nâu, đen, bên cạnh lớp chocolate đen và viền hạnh nhân lát, mang đến mùi vị bùi thơm ngọt ngào.</p>                       
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>                                                                                    
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake03-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Marble Cheesecake</h2>
                            <p>Từ vị béo của phô mai anchor hoà cùng vị ngọt của chocolate trắng và đen đã tạo nên chiếc bánh marble cheesecake mềm mại và thơm ngon.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake05-Carrot-Cake.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Bánh Cà Rốt</h2>
                            <p>Với sự kết hợp của các mùi vị cà rốt, quả óc chó, bơ lạt, phô mai đã tạo nên chiếc bánh kem cà rốt thơm ngon và tốt cho sức khỏe.</p><br>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../Images/SliCake07-.png" alt="" style="width:100%"/>
                        <div class="container">
                            <h2>Strawberry Dome</h2>
                            <p>Khối cầu mang mùi hương dịu nhẹ cùng vị ngọt đến từ lớp kem mousse và kem sữa tươi.</p>
                            <p><button class="button">Order</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Banhngot" class="tabcontent">

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
