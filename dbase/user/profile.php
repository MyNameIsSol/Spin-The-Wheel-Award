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
     if(strpos($url, 'updatedp') == true){
      echo "<script>swal({title: 'Success!', 
        text: 'Profile Updated',
        type: 'success'
      }).then(okay =>{
        if(okay){
          window.location.href = 'profile.php';
        }
      });</script>";
     }
     if(strpos($url, 'error') == true){
      $error = $_GET['error'];
      echo "<script>swal({title: 'Oops...', 
        text: '".$error."',
        type: 'warning'
      }).then(okay =>{
        if(okay){
          window.location.href = 'profile.php';
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

                <div class="page-breadcrumb p-3" style="background-color: #fff !important;">
                    <div class="row">
                      <div class=" col-lg-6 col-md-6 col-xs-12 p-0" style="margin-bottom: 10px;">
                        <h3 class="card-title" style="font-size: 1.75rem; margin-bottom: 3px;">User profile</h3>
                        <h6 class="card-subtitle m-0" style="font-weight: 600; ">You can update your profile and click the save button to make changes.</h6>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center ">
                        
                        
                      </div>
                    </div>
                  </div>
                <!-- <h3 class="card-title" style="font-size: 1.75rem;">prideemergencyfund.com Dashboard</h3>
                <h6 class="card-subtitle " style="font-weight: 600; margin-bottom: 30px;">Earning money online made easy.</h6> -->
                <div class="row">
                
                  <div class="col-lg-4 col-xlg-3 col-md-5 col-sm-12 col-xs-12">
                  <div class="" style="margin: 0px 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
            
                    <div class="card">
                        <div class="card-body">
                          <center class="mt-4">
                          <?php
                    if(empty($profileimg)){
					            echo '<img
                      src="../../assets/images/spin/circle-user.png"
                      class="rounded-circle"
                      width="150"
                    />';
                     }else{
                    echo '<img
                    src="../img/'.$profileimg.'"
                    class="rounded-circle"
                    width="150"
                  />';}
                     ?>
                            <h4 class="card-title mt-2"><?= isset($firstname) && isset($lastname) ? $firstname." ".$lastname : $username ?></h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                              <div class="col-4">
                                <!-- <a href="javascript:void(0)" class="link"
                                  ><i class="icon-people"></i>
                                  <font class="font-weight-medium">254</font></a
                                > -->
                              </div>
                              <div class="col-4">
                                <!-- <a href="javascript:void(0)" class="link"
                                  ><i class="icon-picture"></i>
                                  <font class="font-weight-medium">54</font></a
                                > -->
                              </div>
                            </div>
                          </center>
                        </div>
                        <div>
                          <hr />
                        </div>
                        <div class="card-body">
                          <small class="text-muted">Email address </small>
                          <h6><?= isset($email) ? $email : ""?></h6>
                          <small class="text-muted pt-4 db">Phone</small>
                          <h6><?= isset($phone) ? $phone : ""?></h6>
                          <small class="text-muted pt-4 db">Address</small>
                          <h6><?= isset($address) ? $address: ""?></h6>
                         
                          <!-- <small class="text-muted pt-4 db">Social Profile</small>
                          <br />
                          <button class="btn btn-circle btn-secondary">
                            <i class="fab fa-facebook-f"></i>
                          </button>
                          <button class="btn btn-circle btn-secondary">
                            <i class="fab fa-twitter"></i>
                          </button>
                          <button class="btn btn-circle btn-secondary">
                            <i class="fab fa-youtube"></i>
                          </button> -->
                        </div>
                      </div>

                  </div>
                  </div>

                  <div class="col-lg-8 col-xlg-9 col-md-7 col-sm-12 col-xs-12 p-0" style="border: 1px solid #e5e9f2">
                    <div class="card">
                          <div>
                            <div class="card-body">
                              <form class="form-horizontal form-material" method="post" action="../configs/editprofile.php" enctype="multipart/form-data">
                              <div class="mb-3">
                    <input class="form-control" type="file" name="img" id="formFile">
                    </div>
                                <div class="mb-3">
                                  <label class="col-md-12">First Name</label>
                                  <div class="col-md-12">
                                    <input
                                      type="text"
                                      name="firstname"
                                      value="<?= !empty($firstname) ? $firstname : '';?>"
                                      placeholder="First Name" name="firstname"
                                      class="form-control form-control-line"
                                    />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="col-md-12">Last Name</label>
                                  <div class="col-md-12">
                                    <input
                                      type="text"
                                      name="lastname"
                                      value="<?= !empty($lastname) ? $lastname : '';?>"
                                      placeholder="Last Name"
                                      class="form-control form-control-line"
                                    />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="col-md-12">Username</label>
                                  <div class="col-md-12">
                                    <input
                                      type="text"
                                      name="username"
                                      value="<?= !empty($username) ? $username : '';?>"
                                      placeholder="Username"
                                      class="form-control form-control-line"
                                    />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label for="example-email" class="col-md-12"
                                    >Email</label
                                  >
                                  <div class="col-md-12">
                                    <input
                                      type="email"
                                      placeholder="Email"
                                      value="<?= !empty($email) ? $email : '';?>"
                                      name="email"
                                      class="form-control form-control-line"
                                      id="example-email"
                                    />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="col-md-12">Address</label>
                                  <div class="col-md-12">
                                    <input
                                      type="text"
                                      name="address"
                                      class="form-control form-control-line"
                                      value="<?= !empty($address) ? $address : '';?>"
                                    />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="col-md-12">Phone No</label>
                                  <div class="col-md-12">
                                    <input
                                      type="text"
                                      name="phone"
                                      value="<?= !empty($phone) ? $phone : '';?>"
                                      placeholder="000 000 0000"
                                      class="form-control form-control-line"
                                    />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="col-sm-12">
                                    <button type="submit" name="detailS" value="submit" class="btn btn-success">
                                      Update Profile
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        <!-- </div> -->
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