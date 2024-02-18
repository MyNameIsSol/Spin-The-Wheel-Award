<?php include 'head.php' ?>

    <?php
      $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     if(strpos($url, 'witsuc') == true){
      echo "<script>swal({title: 'Success!', 
        text: 'You withdrawal is been processed...',
        type: 'success'
      }).then(okay =>{
        if(okay){
          window.location.href = 'withdraw.php';
        }
      });</script>";
     }
    ?> 
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
     
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- -------------------------------------------------------------- -->
      <!-- Container fluid  -->
      <!-- -------------------------------------------------------------- -->
      <div class="container-fluid page-content m-0 bg-white" style="padding: 0 5px;">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 m-0 p-0 bg-white">
            <div class="card" >
              <div class="card-body p-4" >

                <div class="page-breadcrumb"  style="background-color: #fff !important; padding: 20px 20px 0;">
                    <div class="row">
                      <div class=" col-lg-12 col-md-12 col-xs-12 p-0" style="margin-bottom: 10px;">
                        <h3 class="card-title" style="font-size: 1.80rem; margin-bottom: 3px; font-weight: 700;">Withdraw</h3>
                        <h6 class="card-subtitle mt-2" style="font-size: 16px;font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif; ">Please confirm your deposit. </h6>
                      </div>
                     
                    </div>
                  </div>
                 
               
                  <script type="text/javascript">
                    function CheckValid(){
                    var withamt = document.forms['withdraw']['withamt'].value;
                    var walletbal = document.forms['withdraw']['walletbal'].value;
                    if(parseInt(withamt) > parseInt(walletbal)){
                    swal("Alert!!!", "You account balance is low... You cannot process this withdrawal", "warning");
                    return false;

                    }else{
                    return true;
                    }
                    }
                </script>
           
                <div class="row">
                  <div class="col-lg-9 col-md-69 col-sm-12">
                  <div class="" style="margin: 20px 0 30px; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                    <h1 style="font-size: 2rem;font-family: Nunito, sans-serif;color: #364a63;font-weight: 700;letter-spacing: -0.03em;">You are about to make a withdrawal</h1>
                           <div class="ref-form mt-4">
                            <form method="post" action="../configs/withdrawscript.php" id="withdraw" name="withdraw" onsubmit="return CheckValid()">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                      <input type="number" class="form-control" id="withamt" name="withamt" />
                                      <label for="tb-email">Enter withdrawal amount</label>

                                      <input type="hidden" name="walletbal" value="<?= !empty($walletbal) ? $walletbal : '';?>">
                                      <input type="hidden" name="usd" value="<?= !empty($username) ? $username : '';?>">
                                      <input type="hidden" name="email" value="<?= !empty($email) ? $email : '';?>">
                                      <input type="hidden" name="firstname" value="<?= !empty($firstname) ? $firstname : '';?>">
                                      <input type="hidden" name="lastname" value="<?= !empty($lastname) ? $lastname : '';?>">
                                    </div>
                                  </div>
                                  <div class="col-12 ">
                                    <div class="ms-auto mt-4">
                                      <div class="spinbut" style="margin-top: 10px;">
                                          <button id="spinbut" type="submit" name="withdraw" style="outline: none; border: 1px solid black; padding: 6px 15px; border-radius: 5px;"> 
                                            <small style="font-size: 15px; font-weight: 700; margin-left: 2px;">Withdraw</small> </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                           </div>
                           <div class="payment-details mt-4">
                            <h5>Please confirm you withdrawal details or <a href="banking.php">Update?</a></h5>
                           <table style="width:300px">
                            <tr>
                              <th>Payment Type</th>
                              <th>Detaild</th>
                            </tr>
                            <?php
                            if(isset($paymenttype)){
                            echo '<tr>
                              <td>'.$paymenttype.'</td>
                              <td>'.$details.'</td>
                            </tr>';
                            }else{
                              echo '<p class="text-danger">No payment details has been submitted</p>';
                            }
                            ?>
                           </table>
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

  <!-- BEGIN THEME GLOBAL STYLE -->
  
  

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