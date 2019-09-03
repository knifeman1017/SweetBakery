<!DOCTYPE html>
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
<div class="main">
    <form action="getCampaign_product.php" method="get">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" style="text-align: center;font-weight: bolder;color: #A82128">CREATE NEW CAMPAIGN</h3>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <h4 id="wronginfo" style="color: red"></h4>
                        <div class="form-group">
                            <label class="">CAMPAIGN NAME</label>
                            <input  type="text" class="form-control" name="txtName" required="" pattern="[A-Za-z 0-9]{3,50}" placeholder="Campaign name must be 3-50 characters" >
                            <label>CAMPAIGN DESCRIPTION</label>
                            <textarea  type="text" class="form-control" name="txtDes" required="" cols="10" rows="5" maxlength="300" placeholder="Optional" ></textarea>
                            <label>CAMPAIGN STATUS</label>
                            <label class="radio-inline">
                                <input type="radio" name="rdCamp" value="1" checked>Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="rdCamp" value="0" >Inactive
                            </label>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>FROM DATE</label>
                                    <input  type="date" class="form-control" name="dateFrom" required="">
                                </div>
                                <div class="col-lg-3">
                                    <label>TO DATE</label>
                                    <input  type="date" class="form-control" name="dateTo" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" name="submit" value="Create" class="btn btn-info">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
</body>
</html>

