<?php
 /*
***************************************************
*** Examination Management System               ***
*** Faculty of Applied Sciences                 ***
***---------------------------------------------***
*** Developer: Lilanka Ravinath                 ***
***                                             ***
***************************************************
*/
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- IE Edge Meta Tag -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Optional IE 8 support -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <!--[endif]-->
        <!-- Minified CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Custome Styles -->
        <link rel="stylesheet" href="../css/styles.css">
        <!-- jQuery -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <!-- Minified JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Fonts Link -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,100,700,900" rel="stylesheet" type="text/css">
        <!-- Icon -->
        <link rel="icon" href="#">
        <style>
            .dashboardDiv {
                margin: 10px;
                color: #fff;
                padding-top: 10px;
                padding-bottom: 10px;
                box-sizing: border-box;
                background-color: #122b40;
                font-size: 2em;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Examination Management System</a>
                </div>
                
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#"><span class="glyphicon glyphicon-user"></span> &nbsp;Admin Panel</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> &nbsp;Profile</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lock"></span> &nbsp;Change Password</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"></span> &nbsp;Logout</a></li>
                        </ul>
                    </li>   
                </ul>
            </div>
        </nav>
        <!-- //Navigation -->
        
        <!-- Middle Area -->
        <div class="container-fluid" style="margin-top: 50px;">
            <div class="row" style="background-color: #2d2d30;">
                <div class="col-md-3 list-group" style="padding: 0;">
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-globe"></span> &nbsp;Dashboard</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-file"></span> &nbsp;Department</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-education"></span> &nbsp;Degree Programme</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-tags"></span> &nbsp;&nbsp;Subject</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> &nbsp;Lecturer</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> &nbsp;Student</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-paperclip"></span> &nbsp;Exam</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span> &nbsp;Result</a>
                    <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-list"></span> &nbsp;Notice</a>
                </div>
                <div class="col-md-9" style="background-color: #dce3e5; padding: 0;">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-size: 1.4em;">
                            <span class="glyphicon glyphicon-globe"></span> &nbsp;Admin Dashboard
                        </div>
                    </div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-globe"></span><br/>Dashboard</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-file"></span><br/>Department</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-education"></span><br/>Degree Programme</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-tags"></span><br/>Subject</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-user"></span><br/>Lecturer</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-user"></span><br/>Student</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-paperclip"></span><br/>Exam</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-ok-circle"></span><br/>Result</div>
                    <div class="col-md-3 dashboardDiv" align="center"><span class="glyphicon glyphicon-list"></span><br/>Notice</div>
                </div>
            </div>
        </div>
        <!-- //Middle Area -->
        
    </body>
</html>

