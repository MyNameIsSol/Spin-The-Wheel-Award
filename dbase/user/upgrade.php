<?php
session_start();
include '../configs/dbcon.php';
$username = $_SESSION['username'];
if(!isset($username)){
    header("Location:../../account_2/login.php?session_expire");
    exit();
}else{
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($dbconnec, $sql);
    $result_checker = mysqli_num_rows($result);
    if ($result_checker > 0) {
      while ($data = mysqli_fetch_assoc($result)) {
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $phone = $data['phone'];
        $usd = $data['username'];
        $country = $data['country'];
        $address = $data['address'];
        $walletbal = $data['walletbal'];
        $totalwith = $data['totalwith'];
        $earns = $data['earns'];
        $tearns = $data['tearns'];
        $min_earn = $data['min_earn'];
        $max_earn = $data['max_earn'];
        $spin_no = $data['spin_no'];
        $lev_2amt = $data['lev_2amt'];
        $lev_4amt = $data['lev_4amt'];
        $currentplan = $data['currentplan'];
        $spin = $data['spin'];
        $spin_pacent = $data['spin_pacent'];
        $currency = $data['currency'];
        $country_code = $data['country_code'];
        $country_currency = $data['country_currency'];
        $currency_letter = $data['currency_letter'];
        $welbonus = $data['welbonus'];
        $access = $data['access'];
        $total_bonus = $data['refpaid'];
        $withdrawal = $data['withdrawal'];
        $active = $data['active'];
        $profileimg = $data['profileimg'];
        $statusofinvest = $data['statusofinvest'];  
    }
    }
}
if(isset($firstname) && isset($lastname)){
  $fullname = $firstname." ".$lastname;
}
// $url = "https://v6.exchangerate-api.com/v6/cb679107ede8a5b31ed289b4/latest/USD";
// $data = file_get_contents($url);
// $json = json_decode(json_encode($data), true);
// $data = json_decode($json, true);
// $rate = $data['conversion_rates'][$currency_letter];
// $usd_to_loc = round($rate * $walletbal, 0);
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, ample admin admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Ample admin is powerful and clean admin dashboard template" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Dashboard - Spin</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/ampleadmin/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../../asset_swtalrt/images/pridefundlogo.png" />
  <!-- Custom CSS -->
  <link href="../../dist/css/style.min.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="spiii.css"> -->
  <link rel="stylesheet" href="spinii.css">

  <link href="../../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="../../plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="../../plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../../asset_swtalrt/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../../dist/js/jquery-3.4.1.min.js"></script>
     <!-- BEGIN THEME GLOBAL STYLE -->
  <script src="../../plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../../plugins/sweetalerts/custom-sweetalert.js"></script>
    <style>
  .spinbut button{
    color:#fff;
    background-color: #000;
  }
  .spinbut button:hover{
    background-color: #4b4747;
    transition: ease 1s;
  }
  .spinads img{
    max-width: 100%;
    max-height: 100%;
    display: block;
  }
  .acct-link:hover{
    background: #d5dce6;
    transition: ease 1s;
  }
  .upper-text a{
    color:#364a63;
  }
  .upper-text a:hover{
    color: #0770fe;
    transition: color .4s, background-color .4s, border .4s, box-shadow .4s;
  }
</style>
      <script src="https://kit.fontawesome.com/1f26519988.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- -------------------------------------------------------------- -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- -------------------------------------------------------------- -->
  <div class="preloader">
    <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
        stroke="#20222a" stroke-width="2"></path>
      <path
        d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
        stroke="#20222a" stroke-width="2"></path>
      <path id="teabag" fill="#20222a" fill-rule="evenodd" clip-rule="evenodd"
        d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
      </path>
      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" stroke="#20222a"></path>
      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#20222a" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
  <!-- -------------------------------------------------------------- -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- -------------------------------------------------------------- -->
  <div id="main-wrapper">
    <!-- -------------------------------------------------------------- -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header border-end">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="../../asset_swtalrt/images/pridefundlogo.png" alt="homepage" width="40px" class="dark-logo" />
              <!-- Light Logo icon -->
              <img src="../../asset_swtalrt/images/pridefundlogo.png" alt="homepage" width="40px" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <h1 class="dark-logo" style="color: #FB8B00; font-size:30px; font-weight: 800; margin:0 10px 0; padding:0">PRIDE</h1>
              <!-- <img src="../../assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" /> -->
              <!-- Light Logo text -->
              <!-- <img src="../../assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" /> -->
              <h1 class="light-logo" style="color: #FB8B00; font-size:30px; font-weight: 800; margin:0 10px 0; padding:0">PRIDE</h1>
            </span>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav me-auto">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>menu</title><path fill="#fff" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg></a>
            </li>
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End mega menu -->
            <!-- ============================================================== -->
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav">
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php
                    if(empty($profileimg)){
					            echo '<img src="../../assets/images/spin/circle-user.png" alt="user" class="rounded-circle" width="36" />';
                     }else{
                    echo '<img src="../img/'.$profileimg.'" alt="user" class="rounded-circle" width="36" />';
                     }
                     ?>
               
                <span class="ms-2 font-weight-medium"><?= !empty($username) ? $username : '';?></span>
                <span><svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>chevron-down</title><path fill="#fff" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" /></svg></span>
              </a>
              <div class=" dropdown-menu dropdown-menu-end user-dd animated flipInY ">
                <div class=" d-flex no-block  align-items-center  p-3 text-white  mb-2" style="background: #20222A;">
                  <div class="">
                  <?php
                    if(empty($profileimg)){
					              echo '<img src="../../assets/images/spin/circle-user.png" alt="user" class="rounded-circle" width="60" />';
                     }else{
                    echo '<img src="../img/'.$profileimg.'" alt="user" class="rounded-circle" width="60" />';
                     }
                     ?>
                    
                  </div>
                  <div class="ms-2">
                    <h4 class="mb-0 text-white"><?= !empty($fullname) ? $fullname : $username;?></h4>
                    <p class="mb-0"><?= !empty($email) ? $email : '';?></p>
                  </div>
                </div>
                <a class="dropdown-item" href="profile.php"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>
                  My Profile</a>
                <a class="dropdown-item" href="dashboard.php"><i data-feather="credit-card"
                    class="feather-sm text-info me-1 ms-1"></i>
                  My Balance</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="banking.php"><i data-feather="settings"
                    class="feather-sm text-warning me-1 ms-1"></i>
                  Account Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php"><i data-feather="log-out"
                    class="feather-sm text-danger me-1 ms-1"></i>
                  Logout</a>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- -------------------------------------------------------------- -->
    <!-- End Topbar header -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- -------------------------------------------------------------- -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class=" sidebar-link  has-arrow waves-effect waves-dark profile-dd " href="javascript:void(0)" aria-expanded="false">
              <?php
                    if(empty($profileimg)){
					           echo '<img src="../../assets/images/spin/circle-user.png" class="rounded-circle ms-2" width="30" />';
                     }else{
                    echo '<img src="../img/'.$profileimg.'" class="rounded-circle ms-2" width="30" />';
                     }
                     ?>
                
                <span class="hide-menu"><?= !empty($username) ? $username : "";?> </span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="profile.php" class="sidebar-link">
                    <i class="ti-user"></i>
                    <span class="hide-menu"> My Profile </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="dashboard.php" class="sidebar-link">
                    <i class="ti-wallet"></i>
                    <span class="hide-menu"> My Balance </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="banking.php" class="sidebar-link">
                    <i class="ti-settings"></i>
                    <span class="hide-menu"> Account Setting </span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="upgrade.php" aria-expanded="false">
                <i><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>seal-variant</title><path fill="#fff" d="M17.71 6.15C17.46 5.38 16.79 5.21 16.45 4.77C16.14 4.31 16.18 3.62 15.53 3.15S14.23 2.92 13.7 2.77 12.81 2 12 2 10.82 2.58 10.3 2.77 9.13 2.67 8.47 3.15 7.86 4.31 7.55 4.77C7.21 5.21 6.55 5.38 6.29 6.15S6.5 7.45 6.5 8 6 9.08 6.29 9.85 7.21 10.79 7.55 11.23C7.86 11.69 7.82 12.38 8.47 12.85S9.77 13.08 10.3 13.23 11.19 14 12 14 13.18 13.42 13.7 13.23 14.87 13.33 15.53 12.85 16.14 11.69 16.45 11.23C16.79 10.79 17.45 10.62 17.71 9.85S17.5 8.55 17.5 8 18 6.92 17.71 6.15M12 12A4 4 0 1 1 16 8A4 4 0 0 1 12 12M14 8A2 2 0 1 1 12 6A2 2 0 0 1 14 8M13.71 15.56L13.08 19.16L12.35 23.29L9.74 20.8L6.44 22.25L7.77 14.75A4 4 0 0 0 9.66 15.17A4.15 4.15 0 0 0 11 15.85A3.32 3.32 0 0 0 12 16A3.5 3.5 0 0 0 13.71 15.56M17.92 18.78L15.34 17.86L15.85 14.92A3.2 3.2 0 0 0 16.7 14.47L16.82 14.37Z" /></svg></i>
                <span class="hide-menu">Upgrade account</span>
                <span class=" badge bg-inverse rounded-pill ms-auto me-3 font-weight-medium px-2 py-1  ">HOT</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="dashboard.php" aria-expanded="false">
                <i><img id="img1" src="../../assets/images/spin/speed.png" width="20" alt="speed"></i>
                <span class="hide-menu">dashboard</span>
              </a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="index.php" aria-expanded="false">
                <i><img id="img1" src="../../assets/images/spin/loader-spin.png" width="20" alt="spin"></i>
                <span class="hide-menu">Spin</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="withdraw.php" aria-expanded="false">
                <i><img id="img1" src="../../assets/images/spin/money.png" width="20" alt="money"></i>
                <span class="hide-menu">Withdraw</span>
              </a>
            </li>
            <div class="devider"></div>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="referral.php" aria-expanded="false">
                <i><img id="img1" src="../../assets/images/spin/lan-ref.png" width="20" alt="Referral"></i>
                <span class="hide-menu">Referral</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="history.php" aria-expanded="false">
                <i><img id="img1" src="../../assets/images/spin/time-past.png" width="20" alt="history"></i>
                <span class="hide-menu">Payment</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="profile.php" aria-expanded="false">
                <i><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-circle-outline</title><path fill="#fff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11A1.5,1.5 0 0,1 10.5,9.5A1.5,1.5 0 0,1 12,8A1.5,1.5 0 0,1 13.5,9.5A1.5,1.5 0 0,1 12,11Z" /></svg></i>
                <span class="hide-menu">Profile</span>
              </a>
            </li>
            <div class="devider"></div>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="../../secure/antifraud.php" aria-expanded="false">
                <i><img id="img1" src="../../assets/images/spin/remove-user.png" width="20" alt="history"></i>
                <span class="hide-menu">Anti fraud policy</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="../../faq/faq.php" aria-expanded="false">
                <i><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>message-question-outline</title><path fill="#fff" d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2M20 16H5.2L4 17.2V4H20V16M12.2 5.5C11.3 5.5 10.6 5.7 10.1 6C9.5 6.4 9.2 7 9.3 7.7H11.3C11.3 7.4 11.4 7.2 11.6 7.1C11.8 7 12 6.9 12.3 6.9C12.6 6.9 12.9 7 13.1 7.2C13.3 7.4 13.4 7.6 13.4 7.9C13.4 8.2 13.3 8.4 13.2 8.6C13 8.8 12.8 9 12.6 9.1C12.1 9.4 11.7 9.7 11.5 9.9C11.1 10.2 11 10.5 11 11H13C13 10.7 13.1 10.5 13.1 10.3C13.2 10.1 13.4 10 13.6 9.8C14.1 9.6 14.4 9.3 14.7 8.9C15 8.5 15.1 8.1 15.1 7.7C15.1 7 14.8 6.4 14.3 6C13.9 5.7 13.1 5.5 12.2 5.5M11 12V14H13V12H11Z" /></svg></i>
                <span class="hide-menu"> Faq</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="logout.php" aria-expanded="false">
                <i><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>login</title><path fill="#fff" d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" /></svg></i>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
      
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
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

          if(strpos($url, 'ug-succ') == true){
              echo "<p class='alert alert-success'>You have sucessfully made an upgrade, A new level has been unlocked.</p>";
              echo "<script>$('.alert-success').fadeOut(7000)</script>";
          }
          if(strpos($url, 'plan-err') == true){
            echo "<script>swal({title: 'Oops...', 
              text: 'You need to upgrade to a new level',
              type: 'warning'
            }).then(okay =>{
              if(okay){
                window.location.href = 'upgrade.php';
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
          <?php
                      if($spin_pacent>0){
                        echo '<div class="alert alert-warning p-0 pt-2 text-center"><p class="p-0 m-0">Upgrade cost -'.$spin_pacent.'% | End in <span id="pacent_countdown"></span></p></div>';
                      }
                      ?>
            <div class="card" >
              <div class="card-body p-4" >

                <div class="page-breadcrumb"  style="background-color: #fff !important; padding: 20px 20px 0;">
                    <div class="row">
                      <div class=" col-lg-6 col-md-6 col-xs-12 p-0" style="margin-bottom: 10px;">
                        <h3 class="card-title" style="font-size: 1.75rem; margin-bottom: 3px;">Upgrade your rank</h3>
                        <h6 class="card-subtitle m-0" style="font-weight: 600; ">Your currently rank: Starter.</h6>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center ">
                        
                        <div class="spinbut">
                        <button type="button" class="spinbut" data-bs-toggle="modal"
                      data-bs-target="#vertical-center-modal" style="outline: none; border: 1px solid black; padding: 5px 15px 5px 13px; border-radius: 3px;"> 
                            <!-- <i class="fa-duotone fa-loader"></i> -->
                            <img width="13px" src="../../assets/images/spin/wallet-out.png" alt="">
                            <small style="font-size: 12px; font-weight: 700; margin-left: 2px;">Deposit</small> </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <script type="text/javascript">
                    function CheckValid(){
                    var fundamount = document.forms['depos']['fundamount'].value;
                    if(fundamount < 1){
                    swal("Error!", "You can not deposit below the minimun amount", "warning");
                    return false;

                    }else{
                    return true;
                    }
                    }
                </script>
                          
                  <!-- Vertically centered modal -->
                  <div class="modal fade"
                      id="vertical-center-modal"
                      tabindex="-1"
                      aria-labelledby="vertical-center-modal"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header d-flex align-items-center" style="border-bottom: 1px solid #ccc7c7">
                            <h4 style="font-size:20px" class="modal-title" id="myLargeModalLabel">
                            Deposit Cash
                            </h4>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <form method="post" action="deposit.php" id="fundform" name="depos" onsubmit="return CheckValid()">
                          <div class="modal-body">
                            <!-- <h4 >Deposit Cash</h4> -->
                            <input type="number" id="fundamount" placeholder="USD" name="fundamount"  style="margin-top: 20px" id="deposit" class="form-control">
                            <label style="font-style: 20px; margin-top: 8px; font-weight:600">
                              System will display banking details to make payment to.
                    </label>

                    <input type="hidden" id="usd" name="usd" value="<?= !empty($username) ? $username : '';?>">
                    <input type="hidden" id="email" name="email" value="<?= !empty($email) ? $email : '';?>">
                    <input type="hidden" id="firstname" name="firstname" value="<?= !empty($firstname) ? $firstname : '';?>">
                    <input type="hidden" id="lastname" name="lastname" value="<?= !empty($lastname) ? $lastname : '';?>">
                          </div>
                          <div class="modal-footer">
                            <button
                            type="submit" name="funding"
                              class="
                                btn btn-light-primary
                                text-white
                                font-weight-medium
                                waves-effect
                                text-start
                              "
                              data-bs-dismiss="modal"
                            >
                              Deposit
                            </button>
                          </div>
                    </form>
                        </div>
                      </div>
                    </div>

                <div class="row">
                <script type="text/javascript">
                  var usd = document.querySelector("#usd").value;
                  var email = document.querySelector("#email").value;
                  var fn = document.querySelector("#firstname").value;
                  var ln = document.querySelector("#lastname").value;

                  var form1 = document.createElement("form");
                    var input1 = document.createElement("input");
                    var input2 = document.createElement("input");
                    var input3 = document.createElement("input");
                    var input4 = document.createElement("input");
                    var input5 = document.createElement("input");
                    var input6 = document.createElement("input");
                  
                    // where you want to post the data 
                    form1.action = "deposit.php";
                    form1.method = "post";

                    // add your fields here 
                    input1.name = "usd";
                    input1.value = usd;

                    input2.name = "email";
                    input2.value = email;

                    input3.name = "firstname";
                    input3.value = fn;

                    input4.name = "lastname";
                    input4.value = ln;

                    input5.name = "funding";
                    input5.value = "fund";

                    input6.name = "fundamount";

                    // then append 
                    form1.appendChild(input1);
                    form1.appendChild(input2);
                    form1.appendChild(input3);
                    form1.appendChild(input4);
                    form1.appendChild(input5);
                //form one 
                function checkamountbal_1(){
                var walletbals = document.forms["myform_1"]["walletbal"].value;
                var amouninvested = document.forms["myform_1"]["amount"].value;
                var amountinvestnumber = parseInt(amouninvested,10);
                if(amouninvested == ""){
                swal("Error!", "Please enter an amount", "error");
                return false;

                }else if(amountinvestnumber > walletbals ){
                swal({title: "Oops...", 
                      text: "Sorry your wallet balance is low... Make a deposit of $" + amountinvestnumber + " instead.",
                      type: "warning"
                    }).then(okay =>{
                      if(okay){
                        input6.value = amountinvestnumber;
                        form1.appendChild(input6);
                        document.body.appendChild(form1);
                        form1.submit();
                      }
                    });
                return false;
                }else{
                  swal({
                    title: "Upgrade processing!",
                    text: "You are about to upgrade to a new level... Do you want to continue?",
                    type: "warning",
                    timer: 10000
                }).then(okay =>{
                  if(okay){
                    return true;
                    }
                    });
                    // return false;
                }
                }

                function checkamountbal_2(){
                var walletbals = document.forms["myform_2"]["walletbal"].value;
                var amouninvested = document.forms["myform_2"]["amount"].value;
                var amountinvestnumber = parseInt(amouninvested,10);
                if(amouninvested == ""){
                swal("Error!", "Please enter an amount", "error");
                return false;

                }else if(amountinvestnumber > walletbals ){
                swal({title: "Oops...", 
                      text: "Sorry your wallet balance is low... Make a deposit of $" + amountinvestnumber + " instead.",
                      type: "info"
                    }).then(okay =>{
                      if(okay){
                        input6.value = amountinvestnumber;
                        form1.appendChild(input6);
                        document.body.appendChild(form1);
                        form1.submit();
                      }
                    });
                return false;
                }else{
                  swal({
                    title: "Upgrade processing!",
                    text: "You are about to upgrade to a new level... Do you want to continue?",
                    type: "warning",
                    timer: 10000
                }).then(okay =>{
                  if(okay){
                    return true;
                    }
                    });
                    // return false;
                }
                }

                function checkamountbal_3(){
                var walletbals = document.forms["myform_3"]["walletbal"].value;
                var amouninvested = document.forms["myform_3"]["amount"].value;
                var amountinvestnumber = parseInt(amouninvested,10);
                if(amouninvested == ""){
                swal("Error!", "Please enter an amount", "error");
                return false;

                }else if(amountinvestnumber > walletbals ){
                swal({title: "Oops...", 
                      text: "Sorry your wallet balance is low... Make a deposit of $" + amountinvestnumber + " instead.",
                      type: "info"
                    }).then(okay =>{
                      if(okay){
                        input6.value = amountinvestnumber;
                        form1.appendChild(input6);
                        document.body.appendChild(form1);
                        form1.submit();
                      }
                    });
                return false;
                }else{
                  swal({
                    title: "Upgrade processing!",
                    text: "You are about to upgrade to a new level... Do you want to continue?",
                    type: "warning",
                    timer: 10000
                }).then(okay =>{
                  if(okay){
                    return true;
                    }
                    });
                    // return false;
                }
                }

                function checkamountbal_4(){
                var walletbals = document.forms["myform_4"]["walletbal"].value;
                var amouninvested = document.forms["myform_4"]["amount"].value;
                var amountinvestnumber = parseInt(amouninvested,10);
                if(amouninvested == ""){
                swal("Error!", "Please enter an amount", "error");
                return false;

                }else if(amountinvestnumber > walletbals ){
                swal({title: "Oops...", 
                      text: "Sorry your wallet balance is low... Make a deposit  of $" + amountinvestnumber + "  instead.",
                      type: "warning"
                    }).then(okay =>{
                      if(okay){
                        input6.value = amountinvestnumber;
                        form1.appendChild(input6);
                        document.body.appendChild(form1);
                        form1.submit();
                      }
                    });
                return false;
                }else{
                  swal({
                    title: "Upgrade processing!",
                    text: "You are about to upgrade to a new level... Do you want to continue?",
                    type: "warning",
                    timer: 10000
                }).then(okay =>{
                  if(okay){
                    return true;
                    }
                    });
                    // return false;
                }
                }
                </script> 
                  <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="" style="margin: 20px 0 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
            
                    <div style="display: flex;">
                        <span  style="align-self: center; padding: 8px 11px; margin: 0; border-radius: 3px; font-size: 15px; font-weight: 600; background-color: #C9AE5D; color: #fff;">L1</span>
                        <div style="margin-left: 17px;">
                          <p style="margin: 0; font-size: 0.975rem; font-weight: 700; padding: 0; color: #364a63;" class="">Level1</p>
                          <small style="font-size: 13px;"><svg width="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>cart</title><path fill="#364a63;" d="M16,18C17.1,18 18,18.9 18,20C18,21.1 17.1,22 16,22C14.9,22 14,21.1 14,20C14,18.9 14.9,18 16,18M16,19C15.45,19 15,19.45 15,20C15,20.55 15.45,21 16,21C16.55,21 17,20.55 17,20C17,19.45 16.55,19 16,19M7,18C8.1,18 9,18.9 9,20C9,21.1 8.1,22 7,22C5.9,22 5,21.1 5,20C5,18.9 5.9,18 7,18M7,19C6.45,19 6,19.45 6,20C6,20.55 6.45,21 7,21C7.55,21 8,20.55 8,20C8,19.45 7.55,19 7,19M18,6H4.27L6.82,12H15C15.33,12 15.62,11.84 15.8,11.6L18.8,7.6V7.6C18.93,7.43 19,7.22 19,7C19,6.45 18.55,6 18,6M15,13H6.87L6.1,14.56L6,15C6,15.55 6.45,16 7,16H18V17H7C5.9,17 5,16.1 5,15C5,14.65 5.09,14.32 5.25,14.03L5.97,12.56L2.34,4H1V3H3L3.85,5H18C19.1,5 20,5.9 20,7C20,7.5 19.83,7.92 19.55,8.26L16.64,12.15C16.28,12.66 15.68,13 15,13Z" /></svg>
                            Price: <strong style="font-weight: 800; color: #000;font-size:14px; font-size: 13px;"> $50 (8397 ₦)</strong></small>
                        </div>
                      </div>
                            <ul class="list-group list-group-flush ps-0 mt-3">
                                <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                 <small class="ml-1" style="font-size: 16px;">Daily earnings range :</small><strong style="font-weight: 800;">$0.3- $0.6</strong> 
                                </li>
                                <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                    <small class="ml-1" style="font-size: 16px;">Number of spins per day :</small><strong > 1</strong> 
                                </li>
                                <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                    <small class="ml-1" style="font-size: 16px;">Total number of spins :</small><strong style="font-weight: 700;"> No limit</strong> 
                                </li>
                                <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                    <small class="ml-1" style="font-size: 16px;">Number of withdrawals per month :</small><strong style="font-weight: 700;"> 1</strong> 
                                </li>
                            </ul>
                            <div class="spinbut" style="margin-top: 10px;">
                            <form method="post" action="../configs/upgradescript.php" onsubmit="return checkamountbal_1()" name="myform_1" enctype="multipart/form-data">
                                        <input type="hidden" name="investtype"  value="cryptocurrency" >
                                        <input type="hidden" name="plan"  value="level1" >
                                        <input type="hidden" name="min-earn"  value="0.3" >
                                        <input type="hidden" name="max-earn"  value="0.6" >
                                        <input type="hidden" name="spin"  value="1" >
                                        <input type="hidden" name="withdraw-no"  value="1" >
                                        <input type="hidden" name="amount"  value="50" >
                                        <input type="hidden" name="walletbal" value="<?= $walletbal ?>">
                                        <input type="hidden" name="usd" value="<?= $username ?>">

                                        <input type="hidden" id="spinpacent" name="spinpacent" value="<?= isset($spin_pacent)?$spin_pacent:""?>">
                                        
                                <button id="spinbut" type="submit" name="upgrade" style="outline: none; border: 1px solid black; padding: 5px 13px; border-radius: 3px;"> 
                                <!-- <i class="fa-duotone fa-loader"></i> -->
                                <small><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>lock-open-outline</title><path fill="#fff" d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z" /></svg></small> 
                                <small style="font-size: 15px; font-weight: 700; margin-left: 3px;">Buy</small> </button>
                                </form>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="" style="margin: 20px 0 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                  
                          <div style="display: flex;">
                              <span  style="align-self: center; padding: 8px 11px; margin: 0; border-radius: 3px; font-size: 15px; font-weight: 600; background-color: #C0C0C0; color: #000;">L2</span>
                              <div style="margin-left: 17px;">
                                <p style="margin: 0; font-size: 0.975rem; font-weight: 700; padding: 0; color: #364a63;" class="">Level2</p>
                                <small style="font-size: 13px;"><svg width="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>cart</title><path fill="#364a63;" d="M16,18C17.1,18 18,18.9 18,20C18,21.1 17.1,22 16,22C14.9,22 14,21.1 14,20C14,18.9 14.9,18 16,18M16,19C15.45,19 15,19.45 15,20C15,20.55 15.45,21 16,21C16.55,21 17,20.55 17,20C17,19.45 16.55,19 16,19M7,18C8.1,18 9,18.9 9,20C9,21.1 8.1,22 7,22C5.9,22 5,21.1 5,20C5,18.9 5.9,18 7,18M7,19C6.45,19 6,19.45 6,20C6,20.55 6.45,21 7,21C7.55,21 8,20.55 8,20C8,19.45 7.55,19 7,19M18,6H4.27L6.82,12H15C15.33,12 15.62,11.84 15.8,11.6L18.8,7.6V7.6C18.93,7.43 19,7.22 19,7C19,6.45 18.55,6 18,6M15,13H6.87L6.1,14.56L6,15C6,15.55 6.45,16 7,16H18V17H7C5.9,17 5,16.1 5,15C5,14.65 5.09,14.32 5.25,14.03L5.97,12.56L2.34,4H1V3H3L3.85,5H18C19.1,5 20,5.9 20,7C20,7.5 19.83,7.92 19.55,8.26L16.64,12.15C16.28,12.66 15.68,13 15,13Z" /></svg>
                                  Price: <strong style="font-weight: 800; color: #000;font-size:14px; font-size: 13px;"> <?= isset($currency)?$currency:""?><?= isset($lev_2amt)?$lev_2amt:""?> (8397 ₦)</strong>
                                  <?php
                                  if($spin_pacent>0){
                                  echo'<small id="lev2dis" style="font-size:13px; font-weight:600; margin-left:20px" class="text-danger">'.$spin_pacent.'% off discount</small>';
                                  }
                                  ?>
                                </small>
                              </div>
                            </div>
                           
                                  <ul class="list-group list-group-flush ps-0 mt-3">
                                      <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                      <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                       <small class="ml-1" style="font-size: 16px;">Daily earnings range :</small><strong style="font-weight: 800;">$1.2- $2</strong> 
                                      </li>
                                      <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                      <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                          <small class="ml-1" style="font-size: 16px;">Number of spins per day :</small><strong > 2</strong> 
                                      </li>
                                      <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                      <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                          <small class="ml-1" style="font-size: 16px;">Total number of spins :</small><strong style="font-weight: 700;"> No limit</strong> 
                                      </li>
                                      <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                      <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                          <small class="ml-1" style="font-size: 16px;">Number of withdrawals per month :</small><strong style="font-weight: 700;"> 1</strong> 
                                      </li>
                                  </ul>
                                  <div class="spinbut" style="margin-top: 10px;">
                                  <form method="post" action="../configs/upgradescript.php" onsubmit="return checkamountbal_2()" name="myform_2" enctype="multipart/form-data">
                                        <input type="hidden" name="investtype"  value="cryptocurrency" >
                                        <input type="hidden" name="plan"  value="level2" >
                                        <input type="hidden" name="min-earn"  value="1.2" >
                                        <input type="hidden" name="max-earn"  value="2.0" >
                                        <input type="hidden" name="spin"  value="2" >
                                        <input type="hidden" name="withdraw-no"  value="1" >
                                        <input type="hidden" name="amount"  value="<?= isset($lev_2amt)?$lev_2amt:""?>" >
                                        <input type="hidden" name="walletbal" value="<?= $walletbal ?>">
                                        <input type="hidden" id="username" name="usd" value="<?= $username ?>">
                                        
                                      <button id="spinbut" type="submit" name="upgrade" style="outline: none; border: 1px solid black; padding: 5px 13px; border-radius: 3px;"> 
                                      <!-- <i class="fa-duotone fa-loader"></i> -->
                                      <small><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>lock-open-outline</title><path fill="#fff" d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z" /></svg></small> 
                                      <small style="font-size: 15px; font-weight: 700; margin-left: 3px;">Buy</small> </button>
                                      </form>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="" style="margin: 20px 0 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                      
                              <div style="display: flex;">
                                  <span  style="align-self: center; padding: 8px 11px; margin: 0; border-radius: 3px; font-size: 15px; font-weight: 600; background-color: #FFD700; color: #000;">L3</span>
                                  <div style="margin-left: 17px;">
                                    <p style="margin: 0; font-size: 0.975rem; font-weight: 700; padding: 0; color: #364a63;" class="">Level3</p>
                                    <small style="font-size: 13px;"><svg width="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>cart</title><path fill="#364a63;" d="M16,18C17.1,18 18,18.9 18,20C18,21.1 17.1,22 16,22C14.9,22 14,21.1 14,20C14,18.9 14.9,18 16,18M16,19C15.45,19 15,19.45 15,20C15,20.55 15.45,21 16,21C16.55,21 17,20.55 17,20C17,19.45 16.55,19 16,19M7,18C8.1,18 9,18.9 9,20C9,21.1 8.1,22 7,22C5.9,22 5,21.1 5,20C5,18.9 5.9,18 7,18M7,19C6.45,19 6,19.45 6,20C6,20.55 6.45,21 7,21C7.55,21 8,20.55 8,20C8,19.45 7.55,19 7,19M18,6H4.27L6.82,12H15C15.33,12 15.62,11.84 15.8,11.6L18.8,7.6V7.6C18.93,7.43 19,7.22 19,7C19,6.45 18.55,6 18,6M15,13H6.87L6.1,14.56L6,15C6,15.55 6.45,16 7,16H18V17H7C5.9,17 5,16.1 5,15C5,14.65 5.09,14.32 5.25,14.03L5.97,12.56L2.34,4H1V3H3L3.85,5H18C19.1,5 20,5.9 20,7C20,7.5 19.83,7.92 19.55,8.26L16.64,12.15C16.28,12.66 15.68,13 15,13Z" /></svg>
                                      Price: <strong style="font-weight: 800; color: #000;font-size:14px; font-size: 13px;"> $150 (33588 ₦)</strong></small>
                                  </div>
                                </div>
                               
                                      <ul class="list-group list-group-flush ps-0 mt-3">
                                          <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                          <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                           <small class="ml-1" style="font-size: 16px;">Daily earnings range :</small><strong style="font-weight: 800;">$2.4- $4.5</strong> 
                                          </li>
                                          <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                          <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                              <small class="ml-1" style="font-size: 16px;">Number of spins per day :</small><strong > 3</strong> 
                                          </li>
                                          <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                          <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                              <small class="ml-1" style="font-size: 16px;">Total number of spins :</small><strong style="font-weight: 700;"> No limit</strong> 
                                          </li>
                                          <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                          <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                              <small class="ml-1" style="font-size: 16px;">Number of withdrawals per month :</small><strong style="font-weight: 700;"> 1</strong> 
                                          </li>
                                      </ul>
                                      <div class="spinbut" style="margin-top: 10px;">
                                      <form method="post" action="../configs/upgradescript.php" onsubmit="return checkamountbal_3()" name="myform_3" enctype="multipart/form-data">
                                        <input type="hidden" name="investtype"  value="cryptocurrency" >
                                        <input type="hidden" name="plan"  value="level3" >
                                        <input type="hidden" name="min-earn"  value="2.4" >
                                        <input type="hidden" name="max-earn"  value="4.5" >
                                        <input type="hidden" name="spin"  value="3" >
                                        <input type="hidden" name="withdraw-no"  value="1" >
                                        <input type="hidden" name="amount"  value="150" >
                                        <input type="hidden" name="walletbal" value="<?= $walletbal ?>">
                                        <input type="hidden" name="usd" value="<?= $username ?>">
                                        
                                      <button id="spinbut" type="submit" name="upgrade" style="outline: none; border: 1px solid black; padding: 5px 13px; border-radius: 3px;"> 
                                      <!-- <i class="fa-duotone fa-loader"></i> -->
                                      <small><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>lock-open-outline</title><path fill="#fff" d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z" /></svg></small> 
                                      <small style="font-size: 15px; font-weight: 700; margin-left: 3px;">Buy</small> </button>
                                      </form>
                                      </div>
                                  </div>
                              </div>
                        
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="" style="margin: 20px 0 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                          
                                  <div style="display: flex;">
                                      <span  style="align-self: center; padding: 8px 11px; margin: 0; border-radius: 3px; font-size: 15px; font-weight: 600; background-color: #E5E4E2; color: #000;">L4</span>
                                      <div style="margin-left: 17px;">
                                        <p style="margin: 0; font-size: 0.975rem; font-weight: 700; padding: 0; color: #364a63;" class="">Level4</p>
                                        <small style="font-size: 13px;"><svg width="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>cart</title><path fill="#364a63;" d="M16,18C17.1,18 18,18.9 18,20C18,21.1 17.1,22 16,22C14.9,22 14,21.1 14,20C14,18.9 14.9,18 16,18M16,19C15.45,19 15,19.45 15,20C15,20.55 15.45,21 16,21C16.55,21 17,20.55 17,20C17,19.45 16.55,19 16,19M7,18C8.1,18 9,18.9 9,20C9,21.1 8.1,22 7,22C5.9,22 5,21.1 5,20C5,18.9 5.9,18 7,18M7,19C6.45,19 6,19.45 6,20C6,20.55 6.45,21 7,21C7.55,21 8,20.55 8,20C8,19.45 7.55,19 7,19M18,6H4.27L6.82,12H15C15.33,12 15.62,11.84 15.8,11.6L18.8,7.6V7.6C18.93,7.43 19,7.22 19,7C19,6.45 18.55,6 18,6M15,13H6.87L6.1,14.56L6,15C6,15.55 6.45,16 7,16H18V17H7C5.9,17 5,16.1 5,15C5,14.65 5.09,14.32 5.25,14.03L5.97,12.56L2.34,4H1V3H3L3.85,5H18C19.1,5 20,5.9 20,7C20,7.5 19.83,7.92 19.55,8.26L16.64,12.15C16.28,12.66 15.68,13 15,13Z" /></svg>
                                          Price: <strong style="font-weight: 800; color: #000;font-size:14px; font-size: 13px;"> <?= isset($currency)?$currency:""?><?= isset($lev_4amt)?$lev_4amt:""?> (50382 ₦)</strong>
                                          <?php
                                              if($spin_pacent>0){
                                              echo'<small id="lev4dis" style="font-size:13px; font-weight:600; margin-left:20px" class="text-danger">'.$spin_pacent.'% off discount</small>';
                                              }
                                              ?>
                                        </small>
                                      </div>
                                    </div>
                                   
                                          <ul class="list-group list-group-flush ps-0 mt-3">
                                              <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                              <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                               <small class="ml-1" style="font-size: 16px;">Daily earnings range :</small><strong style="font-weight: 800;"> $4- $8</strong> 
                                              </li>
                                              <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                              <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                                  <small class="ml-1" style="font-size: 16px;">Number of spins per day :</small><strong > 4</strong> 
                                              </li>
                                              <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                              <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                                  <small class="ml-1" style="font-size: 16px;">Total number of spins :</small><strong style="font-weight: 700;"> No limit</strong> 
                                              </li>
                                              <li class="list-group-item border-bottom-0 py-1 px-0 pt-0 pb-0" style="font-size: 16px;font-weight: 400;line-height: 1.65;color: #526484; align-items: center;">
                                              <small class=""><svg width="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>checkbox-marked-outline</title><path fill="#364A63" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" /></svg></small>
                                                  <small class="ml-1" style="font-size: 16px;">Number of withdrawals per month :</small><strong style="font-weight: 700;"> 2</strong> 
                                              </li>
                                          </ul>
                                          <div class="spinbut" style="margin-top: 10px;">
                                          <form method="post" action="../configs/upgradescript.php" onsubmit="return checkamountbal_4()" name="myform_4" enctype="multipart/form-data">
                                        <input type="hidden" name="investtype"  value="cryptocurrency" >
                                        <input type="hidden" name="plan"  value="level4" >
                                        <input type="hidden" name="min-earn"  value="4" >
                                        <input type="hidden" name="max-earn"  value="8" >
                                        <input type="hidden" name="spin"  value="4" >
                                        <input type="hidden" name="withdraw-no"  value="2" >
                                        <input type="hidden" name="amount"  value="<?= isset($lev_4amt)?$lev_4amt:""?>" >
                                        <input type="hidden" name="walletbal" value="<?= $walletbal ?>">
                                        <input type="hidden" name="usd" value="<?= $username ?>">
                                        
                                      <button id="spinbut" type="submit" name="upgrade" style="outline: none; border: 1px solid black; padding: 5px 13px; border-radius: 3px;"> 
                                      <!-- <i class="fa-duotone fa-loader"></i> -->
                                      <small><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>lock-open-outline</title><path fill="#fff" d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z" /></svg></small> 
                                      <small style="font-size: 15px; font-weight: 700; margin-left: 3px;">Buy</small> </button>
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
  <script src="../../plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../../plugins/sweetalerts/custom-sweetalert.js"></script>

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

<script src="pacentspin.js"></script>
</body>

</html>