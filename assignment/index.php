<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
            @import url(https://fonts.googleapis.com/css?family=Kaushan+Script);
            @import url(https://fonts.googleapis.com/css?family=Chelsea+Market);
            #header{
                font-family:'Kaushan Script';
                font-size: 20px;
                color: oldlace;
            }
            #content {
                font-family:'Chelsea Market';
                padding-top: 20px;
                padding-bottom: 20px;
                font-size: 27px;
            }
        </style>

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="index.php">
                            <div id="header">
                                Room Booking System
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" target="a">
                            <div id="content">Profile</div></a>
                    </li>
                    <li>
                        <a href="roomlist.php" target="a">
                            <div id="content">Room List</div>
                        </a>
                    </li>
                    <li>
                        <a href="searching.php" target="a">
                            <div id="content">Searching Room</div></a>
                    </li>
                    
                    
                    <li>
                        <a href="bkrecord.php" target="a">
                            <div id="content">Booking record</div></a>
                    </li>
                    <li>
                        <a href="#">
                            <div id="content">Services</div></a>
                    </li>
                    <li>
                        <a href="#">
                            <div id="content">Events</div></a>
                    </li>
                    <li>
                        <a href="logout.php" >
                            <div id="content">Logout</div></a>
                    </li>
                </ul>
            </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
session_start();

echo'Welcome,  '.$_SESSION["name"];
 date_default_timezone_set("Asia/Hong_Kong");
$date=  strtotime(date('Y-m-d H:i:s'));
$date2= strtotime("2016-07-05 15:30:00");
$date3=$date2-$date;
$date4=($date3/3600);
echo $date4; echo "<br>";


?>
                        <iframe src="A.php" name="a" width="100%" height="500" frameborder="0"></iframe>
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
 

</body>

</html>
