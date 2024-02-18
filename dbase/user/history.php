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
     if(strpos($url, 'deldepos') == true){
      echo "<script>swal({title: 'Success!', 
        text: 'Deposit history deleted',
        type: 'success'
      }).then(okay =>{
        if(okay){
          window.location.href = 'history.php';
        }
      });</script>";
     }
     if(strpos($url, 'delwith') == true){
      echo "<script>swal({title: 'Success!', 
        text: 'Withdrawal history deleted',
        type: 'success'
      }).then(okay =>{
        if(okay){
          window.location.href = 'history.php';
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

                <div class="page-breadcrumb"  style="background-color: #fff !important; padding: 20px 20px 0;">
                    <div class="row">
                      <div class=" col-lg-6 col-md-6 col-xs-12 p-0" style="margin-bottom: 10px;">
                        <h3 class="card-title" style="font-size: 40px;font-weight: 400 !important; font-family: Nunito, sans-serif; margin-bottom: 20px;">Transaction History</h3>
                        <h6 class="card-subtitle m-0" style="font-weight:400; color:#526484; font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-size: 20px;">View your withdrawal and deposit history</h6>
                      </div>
                    </div>
                  </div>
           
                <div class="row">
                
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="" style="margin: 20px 0 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
            
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link d-flex active" data-bs-toggle="tab" href="#home2" role="tab">
            <span><img width="20" src="../../assets/images/spin/wallet-in.png" alt="">
            </span>
            <span class="d-none d-md-block ms-2">Money in</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex" data-bs-toggle="tab" href="#profile2" role="tab">
            <span><img width="20" src="../../assets/images/spin/wallet-out-1.png" alt="">
            </span>
            <span class="d-none d-md-block ms-2">Money out</span>
        </a>
    </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home2" role="tabpanel">
        <div class="p-3">
            <h3>Deposit</h3>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead class="table-light">
                    <tr>
                        <th scope="col" class="border-0 font-weight-medium ps-4" >
                          # </th>
                        <th scope="col" class="border-0 font-weight-medium">
                          DATE </th>
                        <th scope="col" class="border-0 font-weight-medium">
                          REFERENCE </th>
                        <th scope="col" class="border-0 font-weight-medium">
                          AMOUNT </th>
                        <th scope="col" class="border-0 font-weight-medium">
                          STATUS </th>
                        <th scope="col" class="border-0 font-weight-medium">
                          ACTION </th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                        $sql = "SELECT * FROM depositrequest WHERE username='$username' ORDER BY id DESC";
                        $result = mysqli_query($dbconnec,$sql);
                        $result_check = mysqli_num_rows($result);
                        $i = 1;

                        if($result_check > 0){
                        while($data = mysqli_fetch_assoc($result)){
                        $amount = $data['amount'];
                        $dateofdep = $data['dep_date'];
                        $statusofdep = $data['statusofdep'];
                        $depositid = $data['depositid'];
                    echo '<tr>
                      <td class="ps-4">'.$i++.'</td>
                      <td>
                        <div class="align-items-start">
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">'.$dateofdep.'</h5>
                            <!-- <span class="text-muted"  >Texas, Unitedd states</span > -->
                          </div>
                        </div>
                      </td>
                      <td>
                        <span>'.$depositid.'</span>
                        <!-- <br /><span>Past : teacher</span> -->
                      </td>
                      <td>
                        <span>'.$currency.$amount.'</span>
                        <!-- <br /><span>999 - 444 - 555</span> -->
                      </td>';
                      if($statusofdep == "Pending"){
                      echo '<td>
                        <span class=" badge rounded-pill text-white font-weight-medium bg-warning label-rouded">Pending</span>
                      </td>';
                      }elseif($statusofdep == "Approved"){
                        echo '<td><span class=" badge rounded-pill text-white font-weight-medium bg-success label-rouded">Successful</span></td>';
                      }else{
                        echo '<td><span class=" badge rounded-pill text-white font-weight-medium bg-warning label-rouded">Processing</span></td>';
                      }
                      echo '<td>
                        <a href="../configs/deldeposit.php?dposid='.$depositid.'" class="text-dark delete ms-2" >
                            <i data-feather="trash-2"  class="feather-sm fill-white"></i></a>
                      </td>
                    </tr>';
                        }
                      }
                      ?>
                  </tbody>
                </table>
              </div>
        </div>
    </div>


    <div class="tab-pane  p-3" id="profile2" role="tabpanel">
        <h3>withdrawal</h3>
        <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead class="table-light">
                    <tr>
                      <th scope="col" class="border-0 font-weight-medium ps-4" >
                        # </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        DATE </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        REFERENCE </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        AMOUNT </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        STATUS </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        ACTION </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $sql = "SELECT * FROM withdrawalrequest WHERE username='$username' ORDER BY id DESC";
                        $result = mysqli_query($dbconnec,$sql);
                        $result_check = mysqli_num_rows($result);
                        $i = 1;

                        if($result_check > 0){
                        while($data = mysqli_fetch_assoc($result)){
                        $amount = $data['amount'];
                        $dateofwith = $data['with_date'];
                        $statusofwith = $data['statusofwith'];
                        $withdrawalid = $data['withdrawalid'];
                    echo '<tr>
                      <td class="ps-4">'.$i++.'</td>
                      <td>
                        <div class="align-items-start">
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">'.$dateofwith.'</h5>
                            <!-- <span class="text-muted"  >Texas, Unitedd states</span > -->
                          </div>
                        </div>
                      </td>
                      <td>
                        <span>'.$withdrawalid.'</span>
                        <!-- <br /><span>Past : teacher</span> -->
                      </td>
                      <td>
                        <span>'.$currency.$amount.'</span>
                        <!-- <br /><span>999 - 444 - 555</span> -->
                      </td>';
                      if($statusofwith == "Pending"){
                      echo '<td>
                        <span class=" badge rounded-pill text-white font-weight-medium bg-warning label-rouded">Pending</span>
                      </td>';
                      }elseif($statusofwith == "PAID"){
                        echo '<td><span class=" badge rounded-pill text-white font-weight-medium bg-success label-rouded">Successful</span></td>';
                      }else{
                        echo '<td><span class=" badge rounded-pill text-white font-weight-medium bg-warning label-rouded">Processing</span></td>';
                      }
                      echo '<td>
                        <a href="../configs/delwithdraw.php?withid='.$withdrawalid.'" class="text-dark delete ms-2" >
                            <i data-feather="trash-2"  class="feather-sm fill-white"></i></a>
                      </td>
                    </tr>';
                        }
                      }
                      ?>
                  </tbody>
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