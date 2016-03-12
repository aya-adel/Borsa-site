
<!DOCTYPE html>
<html>
    <head>
        <title> THE BORSA SITE </title>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Alley Signup & Signin Form Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"./>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
</head>
<body>
    <h1> THE BORSA SITE </h1>

    <div class="main-content">
        <div class="sap_tabs">	

            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

                <ul>
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign in</span></li>

                </ul>		
                <!---->

                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    <div class="facts">
                        <!--login1-->
                        <div class="register">
                            <form method="post" action="index_1.php">	
                                <input placeholder="Name" type="text" name="reg_name" rsequired="">
                                <input placeholder="Email Address" name="reg_email"  type="text" required="">									
                                <input placeholder="Password"  name="reg_pass" type="password" required="">	
                                <input placeholder="Confirm Password" name="reg_repass"  type="password" required="">
                                <div class="sign-up">
                                    <input type="submit"  name="reg" value="Create Account"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>	

                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                    <div class="facts">
                        <div class="register">
                            <form method="post" action="index1.php">										
                                <input placeholder="Email Address"  name="login_email" class="mail" type="text" required="">									
                                <input placeholder="Password" class="lock" name="login_passwd" type="password" required="">										
                                <div class="sign-up">
                                    <input type="submit" name="login" value="Sign in"/>
                                </div>
                            </form>
                            <h3><a href="#"> Forgot Password</a></h3>
                        </div>
                    </div> 
                </div> 			        					            	      

            </div>	

        </div>
    </div>
    <!--start-copyright-->
    <div class="copy-right">
        <div class="wrap">
            <p style="color:black ; font-size:30px">&copy;OPEN SOURCE TRACK : AYA $%$ ALAA $%$ HANAN $%$ GHADA <a href="#"></a></p>
        </div>
    </div>
    <!--//end-copyright-->

</body>
</html>