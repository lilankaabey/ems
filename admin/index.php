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
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Examination Management System</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Select Section
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../lecturer/index.php">Lecturer</a></li>
                            <li><a href="../student/index.php">Student</a></li>
                            <li><a href="index.php">Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //Navigation -->
        
        <!-- Login area -->
        <div class="container" style="margin-top: 80px;" align="center">
            <div class="container" id="logindiv">
                <div class="container-fluid" id="loginHead"><b>Login</b></div>
            <form action="#">
                <div class="imgcontainer">
                    <img src="../images/avator.png" alt="Avatar" class="avatar">
                </div>
                <div class="container-fluid">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <button type="submit" class="logbutton">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>
                <div class="container-fluid" style="background-color:#f1f1f1">
                    <button type="button" class="forgotbtn">Forgot Password?</button>
                    <button type="button" class="cancelbtn">Cancel</button>
                </div>
            </form>
            </div>
        </div>
        <!-- //Login area -->
    </body>
</html>
