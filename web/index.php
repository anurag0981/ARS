<?php
include('connection.php');
?>
<html lang="en">
    <head>
        <title>Gaze Sign up & login Form a Flat Responsive Widget Template :: w3layouts </title>
        <!-- Meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
              />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Meta tags -->
        <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
        <!--//style sheet end here-->
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    </head>
    <body>
        <div class="mid-class">
            <div class="art-right-w3ls">
                <h2>Sign In</h2>
                <form action="index.php" method="post">
                    <div class="main">
                        <div class="form-left-to-w3l">
                            <input type="email" name="ars_email" placeholder="Email" required="">
                        </div>
                        <div class="form-left-to-w3l ">
                            <input type="password" name="ars_password" placeholder="Password" required="">
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="left-side-forget">
                        <input type="checkbox" class="checked">
                        <span class="remenber-me">Remember me </span>
                    </div>
                    <div class="right-side-forget">
                        <a href="#" class="for">Forgot password...?</a>
                    </div>
                    <div class="clear"></div>
                    <div class="btnn">
                        <button type="submit" name="login">Sign In</button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="#content1">Sign Up Here
                        </a>
                    </h3>
                </div>
                <!-- popup-->
                <div id="content1" class="popup-effect">
                    <div class="popup">
                        <!--login form-->
                        <div class="letter-w3ls">
                            <form action="index.php" method="post">
                                <div class="form-left-to-w3l">
                                    <input type="text" name="ars_username" placeholder="Username" required="">
                                </div>
                                <div class="form-left-to-w3l">
                                    <input type="email" name="ars_email" placeholder="Email" required="">
                                </div>
                                <div class="form-left-to-w3l">
                                    <input type="password" name="ars_password" placeholder="Password" required="">
                                </div>
                                <div class="form-left-to-w3l margin-zero">
                                    <input type="password" name="ars_cpassword" placeholder="Confirm Password" required="">
                                </div>
                                <div class="btnn">
                                    <button type="submit" name="signup">Sign Up</button>
                                    <br>
                                </div>
                            </form>
                            <div class="clear"></div>
                        </div>
                        <!--//login form-->
                        <a class="close" href="#">&times;</a>
                    </div>
                </div>
                <!-- //popup -->
            </div>
            <div class="art-left-w3ls">
                <h1 class="header-w3ls">
                    Sign In or Sign up for booking tickets
                </h1>
            </div>
        </div>
        <footer class="bottem-wthree-footer">
            <p>
                All Rights Reserved | Design by Aniket & Anurag
            </p>
        </footer>
    </body>
</html>