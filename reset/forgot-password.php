<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <!-- <link rel="shortcut icon" href="./assets/images/favicon.ico"> -->
    <link rel="shortcut icon" href="../assets/images/pridefundlogo.png">
    <!-- Page Title  -->
    <title></title>
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
    <script> window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-207430173-1');
        
        function clearAllCookie() {
				var keys = document.cookie.match(/[^ =;]+(?=\=)/g);
				if(keys) {
					for(var i = keys.length; i--;)
						document.cookie = keys[i] + '=0;expires=' + new Date(0).toUTCString()
				}
			}    
    </script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?be05f818ec0e63ae503537fd05c2cbb3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</div>


    <link rel="stylesheet" href="./assets/css/dashlite.css?1681336820?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.4.0">
</head>
<script src="./assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            
              <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
              <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid" style="margin-top:5rem;">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Forget password</h4>
                                    </div>
                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="nk-data data-list">
                                    <div class="preview-block">
                                        <form action="javascript:void(0)" method='post' id="settingform" >
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                      <div class="form-group">
                                                        <label class="form-label" for="default-01">Username</label>
                                                        <div class="form-control-wrap">
                                                        <input type="text" class="form-control form-control-md" id="username" name='username'  placeholder="Enter your username">
                                                        </div>
                                                    </div>
                                                        <label class="form-label" for="default-01">Email</label>
                                                        <div class="form-control-wrap">
                                                        <input type="email" class="form-control form-control-md" id="email" name='email' placeholder="Enter your email address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type='bottom' id='gobtn' class='btn btn-outline-info'>Send password</button></button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div><!-- data-list -->
                                <!-- data-list -->
                            </div><!-- .nk-block -->
                        </div>
                        <!-- card-aside -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>

<script>
    

    $('#settingform').validate({
        rules: {
            email: {
                required:true,
                email:true,
                //remote: 'html/pages/auths/validate/email.php'
            },
        },
        messages: {
            email: {
                remote: 'malformed email',
            }
            
        },
        errorPlacement: function (error, element) {               
                    error.insertAfter(element.closest('div'));               
            }
        
        })
        $('#gobtn').click(function () {
            if($('#settingform').valid()) {

                var txtt = "";
                $.getScript('send_code.php?type=forgot&email='+document.getElementById("email").value+'&username='+document.getElementById("username").value,function(){
                    if(password=='1') txtt="The password has been sent successfully, please log in to your email to view it.(If you do not receive the email, please wait a few minutes or check spam) ";
                    if(password=='0') txtt="Incorrect username or email address!";
                    if(password=='2') txtt="The password has been sent to your email, please try again in two minutes(If you do not receive the email, please wait a few minutes or check spam) ";
                    if(password=='3') txtt="An error occurred, please contact the administrator";
                    Swal.fire({
                                    icon: 'info',
                                    text:txtt,
                    })
                });
                
            }
            return false;
        });


</script>
                <!-- content @e -->
                <!-- footer @s -->
                

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


                      <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
<script src="./assets/js/sweetalert2.js"></script>
    
</body>

</html>