<?php include 'head.php' ?>
    <!-- -------------------------------------------------------------- -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->


      <!-- <div class="page-breadcrumb border-bottom">
        <div class="row">
          <div class="
                col-lg-3 col-md-4 col-xs-12
                justify-content-start
                d-flex
                align-items-center
              ">
            <h5 class="font-weight-medium text-uppercase mb-0">
              Product Details
            </h5>
          </div>
          <div class="
                col-lg-9 col-md-8 col-xs-12
                d-flex
                justify-content-start justify-content-md-end
                align-self-center
              ">
            <nav aria-label="breadcrumb" class="mt-2">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Product Details
                </li>
              </ol>
            </nav>
            <button class="btn btn-danger text-white ms-3 d-none d-md-block">
              Buy Ample Admin
            </button>
          </div>
        </div>
      </div> -->
     
      <?php
          $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($url, 'updated') == true){
              echo "<p class='alert alert-success'>You have successfully updated your bank details.</p>";
              echo "<script>$('.alert-success').fadeOut(8000)</script>";
          }
          if(strpos($url, 'detailempty') == true){
            echo "<script>swal({title: 'Error...', 
              text: 'Please fill all required details',
              type: 'warning'
            }).then(okay =>{
              if(okay){
                window.location.href = 'banking.php';
              }
            });</script>";
           }
           if(strpos($url, 'passnotmatch') == true){
            echo "<script>swal({title: 'Error...', 
              text: 'New password does not match!',
              type: 'warning'
            }).then(okay =>{
              if(okay){
                window.location.href = 'banking.php';
              }
            });</script>";
           }
           if(strpos($url, 'invalidpwd') == true){
            echo "<script>swal({title: 'Error...', 
              text: 'Old password is wrong!',
              type: 'warning'
            }).then(okay =>{
              if(okay){
                window.location.href = 'banking.php';
              }
            });</script>";
           }
          ?>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- -------------------------------------------------------------- -->
      <!-- Container fluid  -->
      <!-- -------------------------------------------------------------- -->
      <div class="container-fluid page-content m-0" style="padding: 0 5px;">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 m-0 p-0 bg-white">
            <div class="card" >
              <div class="card-body p-4" >
               
               
                <div class="row">
                
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="" style="margin: 0px 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
            
                      <div class="upper-text" >
                        <h5 style="margin: 0 0 30px 20px; font-size: 30px; font-weight: 700; color: #364a63; padding: 0;">Personal Information</h5>
                       
                      </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-1" >
                            <div class="content" style="padding: 10px 20px">
                                <small style="font-size: 18px; font-weight: 600; margin: 0; padding: 0; ">Please enter your withdrawal method</small>
                                <form class="mt-3" action="../configs/bankscript.php" method="post">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select type="text" name="payment-type" required class="form-control" placeholder="Select Method" id="tb-fname">
                                                <option value="" selected>Select Method</option>
                                                <option value="opay">Opay</option>
                                                <option value="verve">Verve</option>
                                                <option value="google-pay">Google Pay</option>
                                                <option value="cash-app">Cash App</option>
                                                <option value="paypal">Paypal</option>
                                                <option value="bitcoin">Bitcoin</option>
                                                <option value="phone-number">Phone Number</option>
                                                <option value="bank-card">Bank Card</option>
                                                <option value="western-union">Western Union</option>
                                            </select>
                                            <!-- <label for="tb-fname">Select Method</label> -->
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                          <input type="test" name="details" class="form-control" id="tb-email" placeholder="Enter your account details" />
                                          <label for="tb-email">Details</label>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <small style="font-size: 18px; font-weight: 600; margin: 0; padding: 0;">Change password</small>
                                      </div>
                                      <div class="col-md-12 mt-4">
                                        <div class="form-floating">
                                          <input type="password" name="password" class="form-control" id="tb-pwd" placeholder="Current Password" />
                                          <label for="tb-pwd">Current Password</label>
                                        </div>
                                      </div>
                                      <div class="col-md-12 mt-4">
                                        <div class="form-floating">
                                          <input type="password" name="newpass" class="form-control" id="tb-pwd" placeholder="New Password(Optional)" />
                                          <label for="tb-pwd">New Password (Optional)</label>
                                        </div>
                                      </div>
                                      <div class="col-md-12 mt-4">
                                        <div class="form-floating">
                                          <input type="password" name="cnewpass" class="form-control" id="tb-cpwd" placeholder="Confirm New Password" />
                                          <label for="tb-cpwd">Confirm New Password</label>
                                        </div>
                                      </div>
                                      <input type="hidden" name="username" value="<?= isset($username) ? $username : ""?>">
                                      <input type="hidden" name="email" value="<?= isset($email) ? $email : ""?>">
                                      <div class="col-12 ">
                                          <div class="ms-auto mt-4">
                                            <div class="spinbut" style="margin-top: 10px;">
                                                <button id="spinbut" name="updatebank" style="outline: none; border: 1px solid black; padding: 6px 15px; border-radius: 5px;"> 
                                                  <small style="font-size: 15px; font-weight: 700; margin-left: 2px;">Change</small> </button>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </form>


                                
                            </div>

                        </div>
                     
                     
                     
                    </div>
                  </div>
                  </div>

                

                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End PAge Content -->
        <!-- -------------------------------------------------------------- -->
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- End Container fluid  -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- footer -->
      <!-- -------------------------------------------------------------- -->
      <footer class="footer text-center">
        © 2022 All Rights Reserved prideemergencyfund 

      </footer>
      <!-- -------------------------------------------------------------- -->
      <!-- End footer -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
  </div>
  <!-- -------------------------------------------------------------- -->
  <!-- End Wrapper -->
  <!-- -------------------------------------------------------------- -->
  <!-- -------------------------------------------------------------- -->
  <!-- customizer Panel -->
  <!-- -------------------------------------------------------------- -->

  <div class="chat-windows"></div>
  
  <!-- -------------------------------------------------------------- -->
  <!-- All Jquery -->
  <!-- -------------------------------------------------------------- -->
  <!-- <script src="../../dist/libs/jquery/dist/jquery.min.js"></script> -->
<script src="../../dist/js/jquery-3.4.1.min.js"></script>

  <!-- Bootstrap tether Core JavaScript -->
  <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- apps -->
  <!-- <script src="../../dist/js/app.min.js"></script> -->
  <script src="app.min.js"></script>
  <!-- <script src="../../dist/js/app.init.sidebar.js"></script> -->
  <script src="app.init.sidebar.js"></script>
  <!-- <script src="../../dist/js/app-style-switcher.js"></script> -->
  <script src="app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../../dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js"></script>
  <script src="../../dist/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!--Wave Effects -->
  <script src="../../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../../dist/js/feather.min.js"></script>
  <script src="../../dist/js/custom.min.js"></script>

  
  <script>
    $("document").ready(function(){ 
        $("#spinbut").mouseenter(function(){    
            $(this).find("#img1").attr('src','../../assets/images/spin/loaderr.png');    
        });     
        $("#spinbut").mouseleave(function(){       
            $(this).find("#img1").attr('src','../../assets/images/spin/loader.png');      
        }); 
    });
</script>
</body>

</html>