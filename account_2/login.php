<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <!-- <link rel="shortcut icon" href="./assets/images/favicon.ico"> -->
    <link rel="shortcut icon" href="../asset_swtalrt/images/pridefundlogo.png">
    <!-- Page Title  -->
    <title>Log in to your personal dashboard</title>
    <meta property="og:image" content="/assets/images/shaixna2.jpg">
    <meta property="og:title" content="During the world cup,the most profitable website without investment">
    <meta property="og:description" content="New platform, $3 signup bonus, no deposit, free spins, $100-600 per day,">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="600px">
    <meta property="og:image:height" content="324px">
    <meta property="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="/assets/images/shaixna2.jpg">
    <!-- StyleSheets  -->


    <link rel="stylesheet" href="./assets/css/dashlite.css?1681074174?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.4.0">

    <link href="../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="../plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="../plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../asset_swtalrt/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
</head>
<!--End of Tawk.to Script-->
<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                
<script>
    function jsValidatel(){
        var uname = document.forms['logi']['uname'].value;
        var pwd = document.forms['logi']['pwd'].value;

        if(uname == ''){
        swal('Error!', 'Please enter your username', 'warning');
        return false;

        }else if(pwd == ''){
        swal('Error!', 'Please enter your password', 'warning');
        return false;

        }else{
            return true;
        }
    }
    </script>

<script src="assets/js/jquery.min.js"></script>
                <!-- content @s -->
                <div class="nk-content ">
<div id="alertinfo" style="text-align:center; width:80%; margin:10px auto;">
<?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url, 'session_expire') == true){
    echo "<p class='suc alert alert-danger'>Warning! Session expired, please login again</p>";
    echo "<script>$('.alert-danger').fadeOut(3000)</script>";
}

  if(strpos($url, 'tableerror') == true){ 
    echo "<p class='suc alert alert-danger'>Server down! error creating database table  </p>";
    echo "<script>$('.alert-danger').fadeOut(3000)</script>";
  }
  if(strpos($url, 'invaliduid') == true){
    echo "<p class='suc alert alert-danger' style='color:red;font-size:20px;'>Warning! Please provide a valid username</p>";
    echo "<script>$('.alert-danger').fadeOut(3000)</script>";
}
    if(strpos($url, 'error') == true){
		echo "<p class='suc alert alert-danger'>Invalid Process...  </p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
	}
	if(strpos($url, 'invalidemail') == true){
		echo "<p class='suc alert alert-danger' style='color:red;font-size:20px;'>Error! Invalid Email Address</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
	}
     if(strpos($url, 'loginempty') == true){
        echo "<p class='suc alert alert-danger' style='color:red;font-size:15px;'> Warning! Please fill out all inputs</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
      }
      if(strpos($url, 'invalidpwd') == true){
        echo "<p class='suc alert alert-danger' style='color:red; font-size:15px;'>Error! Invalid Password</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
      }
      if(strpos($url, 'deactiveacct') == true){
        echo "<p class='suc alert alert-danger' style='color:red; font-size:15px;'>Warning! Your Investment Account has been deactivated, please contact our support service.</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
      }
      if(strpos($url, 'signupsuc') == true){
        echo "<p class='suc alert alert-success' style='color:black; font-size:15px;'>Success! You have successfully created your account, please login...</p>";
        echo "<script>$('.alert-success').fadeOut(6000)</script>";
      }
?>
</div>
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="../" class="logo-link">
                                <!-- <img class="logo-light logo-img logo-img-lg" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark"> -->
                                <div style="display: flex; align-items: center;">
                                    <img class="logo-light logo-img logo-img-lg" src="../asset_swtalrt/images/pridefundlogo.png" srcset="./assets/images/pridefundlogo.png 2x" width="60" alt="" style="margin:0">
                                    <img class="logo-dark logo-img logo-img-lg" src="../asset_swtalrt/images/pridefundlogo.png" width="60" alt="" style="margin:0"><h1 style="color: #FB8B00; font-size:45px; font-weight: 800; margin:0 10px 0; padding:0">PRIDE</h1>
                                </div>
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the prideemergencyfund.com panel using your username and password.</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="../dbase/configs/loginscript.php" name="logi" onsubmit="return jsValidatel()">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Username</label>
                                        </div>
                                        <input type="text" required class="form-control form-control-lg" name="uname"  placeholder="Enter your username">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" href="../reset/forgot-password.php">Forgot Password?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="pwd" required class="form-control form-control-lg" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="../account_1/register.php">Create an account</a>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                  
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>    
    <script src="./assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/sweetalert2.js"></script>

    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="../plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../plugins/sweetalerts/custom-sweetalert.js"></script>
    
<style>
label.error {
 color: #F00;
 font-weight: bold;
}
input.error, select.error, textarea.error {
 border: 1px red solid;
}

</style>

</html>