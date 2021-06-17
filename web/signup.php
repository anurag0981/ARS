<?php
include('connection.php');
?>
<html lang="en">
    <head>
        <title>LoginPage</title>
        <link rel="icon" href=""/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/festocon.css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <p class="navbar-brand">
                    <span>
                        <img alt="Logo" class="nav-img" src="Images/logo7.jpg"/>
                    </span>
                </p>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="#">Welcome FestoCon User <small><span class="glyphicon glyphicon-user"></span></small></a></li>";
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Login <small><span class="glyphicon glyphicon-log-in"></span></small></a></li>";
                </ul>
            </div>
        </nav>

        <div class="mainmenu">
            <center>
                <div class="signupcenter">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 account-field">
                        <div class="account-wall">
                            <div id="Signdiv" class="form-SignUp" runat="server">
                                <div>
                                    <h2 class="HeadStart">Sign Up Page</h2>
                                </div>
                                <br />
                                <form action="signup.php" method="post">
                                    <div class="form-group">
                                        <input class="form-control" id="fc_username" type="text" name="fc_username" placeholder="User Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="fc_emailid" type="email" name="fc_emailid" placeholder="Email Id" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="fc_password" type="password" name="fc_password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="fc_cpassword" type="password" name="fc_cpassword" placeholder="Confirm Password" required><br>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control btn btn-primary btn-x" style="background-color:#33b5e5" type="submit" name="signup" value="Sign Up">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>

        <div class="footer" style=""> 
            <p>Designed & Developed by Aniket & Anurag </p>
        </div>

    </body>
</html>
