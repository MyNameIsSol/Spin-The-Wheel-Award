<?php include '../dbase/configs/dbcon.php'; ?>
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
    <title>Register</title>
    <meta property="og:image" content="/assets/images/shaixna2.jpg">
    <meta property="og:title" content="During the world cup,the most profitable website without investment">
    <meta property="og:description" content="New platform, $3 signup bonus, no deposit, free spins, $100-600 per day,">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="600px">
    <meta property="og:image:height" content="324px">
    <meta property="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="/assets/images/shaixna2.jpg">
    <!-- StyleSheets  -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207430173-1"></script>

    <link rel="stylesheet" href="assets/css/dashlite.css?1681074504?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="assets/css/theme.css?ver=2.4.0">
    <link rel="stylesheet" href="assets/telinput/css/intlTelInput.css">

    <link href="../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="../plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="../plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../asset_swtalrt/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
</head>
<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
            <script>
        function jsvalidater(){
            var uname = document.forms['reg']['uname'].value;
            var email = document.forms['reg']['email'].value;
            var country = document.forms['reg']['country'].value;
            var phone = document.forms['reg']['phone'].value;
            var pwd = document.forms['reg']['pwd'].value;
		      	var cpwd = document.forms['reg']['cpwd'].value;
		      	var terms = document.forms['reg']['agree'].value;
            
          if(uname == ''){
          swal('Error!', 'Please enter your username', 'warning');
          return false;

          }else if(email == ''){
            swal('Error!', 'Please enter your Email address', 'warning');
          return false;

          }else if(phone == ''){
            swal('Error!', 'Please enter your phone number', 'warning');
          return false;

          }else if(phone.length < 10){
            swal('Error!', 'Phone number is incomplete', 'warning');
          return false;

          }else if(country == ''){
            swal('Error!', 'Please enter your country name', 'warning');
          return false;

          }else if(pwd == ''){
            swal('Error!', 'Please enter your password', 'warning');
          return false;

          }else if(pwd.length < 8){
            swal('Error!', 'Password should have a minimum 8 character', 'warning');
          return false;

          }else if(pwd != cpwd){
            swal('Error!', 'Your password does not match', 'warning');
          return false;

          }else if(terms == ''){
            swal('Error!', 'You have to agree with the Terms and Condition!', 'warning');
          return false;

          }else{ 
          return true;
          }
        }
    </script>
    <script src="assets/js/jquery.min.js"></script>

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="../" class="logo-link">
                                <!-- <img class="logo-light logo-img logo-img-lg" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark"> -->
                                <div style="display: flex; align-items: center;">
                                    <img class="logo-light logo-img logo-img-lg" src="../asset_swtalrt/images/pridefundlogo.png" srcset="../assets/images/pridefundlogo.png 2x" width="60" alt="" style="margin:0">
                                    <img class="logo-dark logo-img logo-img-lg" src="../asset_swtalrt/images/pridefundlogo.png" width="60" alt="" style="margin:0"><h1 style="color: #FB8B00; font-size:45px; font-weight: 800; margin:0 10px 0; padding:0">PRIDE</h1>
                                </div>
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                <div style="text-align:center; width:80%; margin:15px auto 0;">
<?php

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url, 'tempty') == true){
    echo "<p class='suc alert alert-danger'>Warning! You have to agree with the Terms and Condition</p>";
    echo "<script>$('.alert-danger').fadeOut(3000)</script>";
}
  if(strpos($url, 'tableerror') == true){ 
    echo "<p class='suc alert alert-danger'>Server down! error creating database table  </p>";
    echo "<script>$('.alert-danger').fadeOut(3000)</script>";
  }

	if(strpos($url, 'signupempty') == true){
		echo "<p class='suc alert alert-danger'>Warning! Please, fill out all inputs</p>";
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

	if(strpos($url, 'uidtaken') == true){
		echo "<p class='suc alert alert-danger' style='color:red;font-size:20px;'>Warning! Email or Username already exit</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
	}

	if(strpos($url, 'signupsuc') == true){
		echo "<p class='suc alert alert-success' style='color:green;font-size:15px;'> Registration successfully...Please <a href='../account_2/login.php'> LOGIN </a> </p>";
        echo "<script>$('.alert-success').fadeOut(3000)</script>";
	 }

      if(strpos($url, 'invalidpwd') == true){
        echo "<p class='suc alert alert-danger' style='color:red; font-size:15px;'>Error! Invalid Password</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
      }
      if(strpos($url, 'deactiveacct') == true){
        echo "<p class='suc alert alert-danger' style='color:red; font-size:15px;'>Warning! Your Investment Account has been deactivated, please contact our support service.</p>";
        echo "<script>$('.alert-danger').fadeOut(3000)</script>";
      }

?>
</div>
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Register</h4>
                                        <div class="nk-block-des">
                                            <p>Create New prideemergencyfund.com Account</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="../dbase/configs/regscript.php" method='post' name="reg" onsubmit="return jsvalidater()">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Username</label>
                                        <input type="text" class="form-control form-control-md" id="username" name="uname" placeholder="Enter your username">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control form-control-md" id="email" name="email" placeholder="Enter your email address">
                                    </div>

                                    <div class="form-group">
										<label class="form-label" for="default-01"> Enter Your Phone</label>
										<input type="text" class="form-control " id="phone" name='phone' style="width:337px" placeholder="Enter Your Phone">
									</div>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Select Country</label>
                                        <select type="text" class="form-control form-control-md" id="country" name="country">
                                            <option value="">country</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, Democratic Republic of the Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote D'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and Mcdonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="XK">Kosovo</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthelemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="CS">Serbia and Montenegro</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.s.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    
                                    <input type="hidden" name="a" value="a">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-md" name="pwd" id="password" placeholder="Create password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="repassword">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-md" name="cpwd" id="repassword" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                                <?php
                                            $url="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                            if(isset($_GET['ref'])){
                                            $refname = mysqli_real_escape_string($dbconnec,$_GET['ref']);
                                            }?>
                                            <input id="ref" name="refid" value="<?= !empty($refname) ? $refname : '';?>" type="hidden" class="form-control" placeholder="Referral">
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" name="agree" value="I agree" checked class="form-check-input" >
                                            <label class="form-check-label" for="checkbox">I agree to prideemergencyfund.com <a href="../privacy/privacy.php">Privacy Policy</a> &amp; <a href="../terms/terms.php" > Terms.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <button type='button' id='load' style='display: none' class='btn btn-lg btn-primary btn-block'>
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                            <span class="sr-only">Loading...</span>
                                            </div>
                                        </button> -->
                                        <button name="signup"  type='submit' class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="../account_2/login.php"><strong>Sign in instead</strong></a>
                                </div>
                                

<link rel="stylesheet" href="assets/css/toastr.min.css">
<link rel="stylesheet" href="assets/css/ext-component-toastr.css">
<script src="assets/js/vendors.min.js"></script>
<script src="assets/js/toastr.min.js"></script>
<style>
.fw-bolder {
  font-weight: 600 !important;
}
.text-success {
  color: #28c76f !important;
}
.p-25 {
  padding: 0.25rem !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-primary {
  color: #7367f0 !important;
}
</style>

<div class="ymwl-form" style="z-index:666" id="ymwl-kefu">
<a href="#loadingbot" target="chatform">
<img class="ymwl-icon" src="./assets/images/chat.png?x">
</a>

</div>
<style>
    .ymwl-form {
    filter: alpha(opacity = 0);
    transition: 0.2s ease-out;
    position: fixed;
    bottom: 25%;
    width: 70px;
    right: 0;
    font-size: 12px;
    z-index: 9999;
    padding-bottom: 10px;
}

.ymwl-form .ymwl-item {
    position: relative;
    box-sizing: border-box;
    display: block;
    width: 100%;
    height: 30px;
    line-height: 30px;
    font-size: 12px;
    color: #fff;
    text-align: center;
    cursor: pointer;
    z-index: 9999;
    margin:0;
}

.ymwl-item:hover{
  color: red;
}

.ymwl-form input{
  cursor:pointer;border:none;background:transparent;color:#fff;margin: 3px 0;
}

.ymwl-form input:hover{
    color: #043b9a
}

.ymwl-icon{
    display: block;
    width: 5rem;
}

.ymwl-close {
    display: block;
    width: 18px;
    height: 18px;
    background: url(./close.png) no-repeat;
    position: absolute;
    right: 10px;
    top: 10px;
}

#wolive-talk{
  width: 400px;
  height: 560px;
  position: fixed;
  bottom: 10px;
  right:90px;
  z-index: 999999;

}

#wolive-iframe{
  width: 100%;
  height: 100%;
  box-shadow: rgba(15, 66, 76, 0.25) 0 0 24px 0;
  border: none;
}
</style><script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function showToast() {
            $.get('fetch.php', function(d) {
				console.log(d)
                if(d.success === true) {
                    toastr.remove();
					toastr['success']("<h6 class='p-25'> <span class='fw-bolder text-primary text-uppercase'>" + d.toast.name + "</span> was just paid <strong class='text-success'>$" + d.toast.amount + "</strong> via <strong class='text-primary'>" + d.toast.method + "</strong></h6>", "<h5 class='text-success fw-bolder'>New Payment Sent:</h5>", {
                      "closeButton": true,
                      tapToDismiss: true,
                      progressBar: true,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "7000",
                      "positionClass": 'toast-bottom-left',
                      "extendedTimeOut": "1000",
                      "showMethod": "slideDown"
                    });
                }
            },"json");
        }
        function doToast(secs) {
            setInterval(function(){ toastr.remove();showToast(); }, secs);
        }
      
        function randomIntFromInterval(min, max) { 
          return Math.floor(Math.random() * (max - min + 1) + min);
        }

        setTimeout(function(){ 
            toastr.remove();
            showToast();
            doToast(randomIntFromInterval(30, 50)*1000);
        }, randomIntFromInterval(5, 15) * 1000);
</script>


                              </div>
                  
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <div class="modal fade" id="telegram" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anti-Fraud Policy</h5>
        <button type="button" class="close" data-target="telegram" onclick="closetele()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Our Anti-Fraud policy is direct and concise. All unauthentic traffic is prohibited. If our manual review team or our AI automatically detects any fake stats, your account will be terminated indefinitely and you will be permanently banned from prideemergencyfund and accessing its services.      </div>
      <div class="modal-footer">
        <a href='/antifraud.php' type="button" class="btn btn-secondary"  target="chat">Detail</a>
        <button type="button" class="btn btn-primary" onclick="closetele()" data-dismiss="modal">Agree</button>
      </div>
    </div>
  </div>
</div>
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
   
<!-- BEGIN THEME GLOBAL STYLE -->
    <script src="../plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../plugins/sweetalerts/custom-sweetalert.js"></script>

<script src="assets/telinput/js/intlTelInput.js"></script>
<script>	
 var input = document.querySelector("#phone");
  window.intlTelInput(input);
  
window.intlTelInput(input, {
	initialCountry: "ng",
      utilsScript : "assets/telinput/js/utils.js",
  });
  
</script>


<script type="text/javascript">
            $(window).on('load', function() {
               //$('#telegram').modal('show'); 
            });
            
           function closetele(){
            $('#telegram').modal('hide');
           }
        </script>
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