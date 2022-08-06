<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Express PC Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />
    <!-- css -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><span>E</span>xpress PC Repair</a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li ><a href="view_order.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">ORDERS <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="view_order.php">VIEW ORDERS</a></li>
                                    <li><a href="update_order.php">UPDATE ORDERS</a></li>

                                </ul>
                            </li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">TECHNICIANS <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="update_technician1.php">VIEW TECHNICIANS</a></li>
                                    <li><a href="view_technician.php">UPDATE TECHNICANS</a></li>

                                </ul>
                            </li>
                            <li class="active"><a href="view_technician.php">Technicians</a></li>
                            <li><a href="insert.html">REPORT</a></li>
                            <li><a href="index.html">LOG OUT</a></li>

                        </ul>
                    </div>
                </div>
            </div>
</table>
<div class="container">
            <div class="col-lg-5">
                 <div class="form-area">  
                    <form id=update technician role="form" action="update_technician.php" method="POST">
                        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Add new technician</h3>
                     <div class="form-group">
                        <input type="text" name="techID" class="form-control" id="techID" name="name" placeholder="Technician ID" maxlength="32" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="techName" class="form-control" id="techName" name="techName" placeholder="Technician Name" required="" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="email" name="email" placeholder="Email Address" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required="" rows="3">
                               
            <button type="submit" id="submit" name="submit" class="btn btn-theme btn-rounded pull-right">Submit</button>
        </form>
    </div>
    </div>
</div>

<!-- javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>


</body>
</html>

