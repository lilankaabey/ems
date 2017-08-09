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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Optional Theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!-- Custome Styles -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- jQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Fonts Link -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,100,700,900" rel="stylesheet" type="text/css">
        <!-- Icon -->
        <link rel="icon" href="#">
        <!-- Style for this page -->
        <style>
            #logInIcon{
                background-color: #333;
                margin: 0px;
                border: 5px solid #dce3e5;
            }
            #logInIcon > a > img {
                margin-top: 10px;
                margin-bottom: 10px;
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
            </div>
        </nav>
        <!-- //Navigation -->
        
        <!-- Middle section -->
        <div class="container" style="margin-top: 80px;">
            <div class="row" align="center" style="margin-bottom: 10px;">
                <span>Examination Management System</span><br/>
                <span>Faculty of Applied Sciences - SUSL</span>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4" id="logInIcon" align="center"><a href="admin/index.php"><img src="images/admin.png" height="300" width="auto"></a></div>
                <div class="col-md-4 col-lg-4" id="logInIcon" align="center"><a href="lecturer/index.php"><img src="images/lecturer.png" height="300" width="auto"></a></div>
                <div class="col-md-4 col-lg-4" id="logInIcon" align="center"><a href="student/index.php"><img src="images/student.png" height="300" width="auto"></a></div>
            </div>
        </div>
        <!-- //Middle section -->
    </body>
    </body>
</html>