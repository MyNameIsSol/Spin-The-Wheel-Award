<?php
include '../configs/dbcon.php';
// include 'userhead.php';
$adminEthAdr = "0x5483Fc5F0Ef1E3Af195D0bc7943cE1ec182f6305";
$adminBtcAdr = "1GG8po39pVqwZYABmH7JkeXG5ePRrGnepB";
$adminBnbAdr = "0x5483Fc5F0Ef1E3Af195D0bc7943cE1ec182f6305";

$adminEthQr = "../../assets/images/spin/pride-eth.jpg";
$adminBtcQr = "../../assets/images/spin/pride-btc.jpg";
$adminBnbQr = "../../assets/images/spin/pride-bnb.jpg";
if (isset($_POST['fundpay'])) {
  $fundamount = mysqli_real_escape_string($dbconnec, $_POST['fundamount']);
  $username = mysqli_real_escape_string($dbconnec, $_POST['usd']);
  $useremail = mysqli_real_escape_string($dbconnec, $_POST['email']);

  $fn = mysqli_real_escape_string($dbconnec, $_POST['firstname']);
  $ln = mysqli_real_escape_string($dbconnec, $_POST['lastname']);

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
      $currentplan = $data['currentplan'];
      $spin = $data['spin'];
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
} elseif (isset($_POST['paynow'])) {
  $fundamount = mysqli_real_escape_string($dbconnec, $_POST['fundamount']);
  $paytype = mysqli_real_escape_string($dbconnec, $_POST['paytype']);

  $username = mysqli_real_escape_string($dbconnec, $_POST['usd']);
  $useremail = mysqli_real_escape_string($dbconnec, $_POST['email']);

  $fn = mysqli_real_escape_string($dbconnec, $_POST['firstname']);
  $ln = mysqli_real_escape_string($dbconnec, $_POST['lastname']);

  $depositid = uniqid();
  $depositid = "dp" . substr($depositid, 0, 3) . substr($depositid, -3, 3);

  $date = date('Y-m-d H:i:s');
  $status = "Pending";

  $transtype = "Deposit";

  $sql = "SELECT * FROM users WHERE username='$username' ";
  $result = mysqli_query($dbconnec, $sql);
  $result_checker = mysqli_num_rows($result);

  if ($result_checker > 0) {
    while ($data = mysqli_fetch_assoc($result)) {

      $walletbal = $data['walletbal'];

      $tbname = 'depositrequest';
      $tbcols = 'id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			username VARCHAR(22) NOT NULL,
			email VARCHAR(225) NOT NULL,
			depositid VARCHAR(225) NOT NULL,
			amount VARCHAR(22) NOT NULL,
			transtype VARCHAR(22) NOT NULL,
			statusofdep VARCHAR(22) NOT NULL,
			walletbal VARCHAR(225) NOT NULL,
			dep_date DATETIME NOT NULL';
      if ($dbconnec) {
        $sql = "CREATE TABLE IF NOT EXISTS $tbname($tbcols)";
        if (!mysqli_query($dbconnec, $sql)) {
          $error = "Could'nt send Deposit request";
          header("Location:deposit.php?tableerror=" . $error);
          exit();
        }
      }

      $sql = "INSERT INTO depositrequest (username,amount,dep_date,statusofdep,depositid,walletbal,email,transtype) VALUES ('$username','$fundamount','$date','$status','$depositid','$walletbal','$useremail','$transtype')";
      if (!mysqli_query($dbconnec, $sql)) {
        die("Error: " . mysqli_error($dbconnec));
        exit;
      }

      if ($paytype == "Btc") {

        // MAIL TO ADMIN FOR BTC PAYMENT

        // MAIL TO USER

      } else if ($paytype == "Eth") {

        // MAIL TO ADMIN FOR ETH PAYMENT

        // MAIL TO USER

      } else if ($paytype == "Usdt") {

        // MAIL TO ADMIN FOR USDT PAYMENT

        // MAIL TO USER


      }
    }

  }
  header("Location:index.php?paid");
      exit;
} else {
  $error = "Invalid Payment Type!";
  header("Location:deposit.php?error=" . $error);
  exit();
}

if (isset($firstname) && isset($lastname)) {
  $fullname = $firstname . " " . $lastname;
}
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
    <style>
      .spinbut button{
        color:#fff;
        background-color: #000;
      }
      .spinbut button:hover{
        background-color: #4b4747;
        transition: ease 1s;
      }
      .copy{
        color:#3d3a3a;
        border:1px solid #383636;
        background-color: #f0ecec;
        padding: 10px;
        font-size: 15px;
        font-weight: 600;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        transition: ease;
      }
      .copy:hover{
        color:#fff;
        background-color: #333030;
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
      #copy-suc{
        display : none;
        padding:10px;
      }
      #btccopy-suc{
        display : none;
        padding:10px;
      }
      #ethcopy-suc{
        display : none;
        padding:10px;
      }
      #bnbcopy-suc{
        display : none;
        padding:10px;
      }
    </style>
      <!-- <script src="https://kit.fontawesome.com/1f26519988.js" crossorigin="anonymous"></script> -->
      <script src='https://kit.fontawesome.com/637381c909.js' crossorigin="anonymous"></script>
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
                    echo '<img src="../../assets/images/'.$profileimg.'" alt="user" class="rounded-circle" width="60" />';
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
                        <h3 class="card-title" style="font-size: 32px;font-weight: 400 !important; font-family: Nunito, sans-serif; margin-bottom: 20px;">Deposit</h3>
                        <h6 class="card-subtitle m-0" style="font-weight:500; color:#8891a0; font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-size: 16px;">View your withdrawal and deposit history</h6>
                      </div>
                    </div>
                  </div>
           
                <div class="row">
                
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="" style="margin: 20px 0 0; padding: 20px 20px; align-items: center; border-radius: 3px;">
            
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link d-flex active" data-bs-toggle="tab" href="#home2" role="tab">
            <span><img width="20" src="../../assets/images/spin/wallet-in.png" alt="">
            </span>
            <span class="d-none d-md-block ms-2">ETH</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex" data-bs-toggle="tab" href="#profile2" role="tab">
            <span><img width="20" src="../../assets/images/spin/wallet-out-1.png" alt="">
            </span>
            <span class="d-none d-md-block ms-2">BTC</span>
        </a>
    </li>
    <li class="nav-item">
        <a
          class="nav-link d-flex"
          data-bs-toggle="tab"
          href="#messages2"
          role="tab"
        >
        <span><img width="20" src="../../assets/images/spin/wallet-in.png" alt="">
        </span>
          <span class="d-none d-md-block ms-2">BNB</span>
        </a>
      </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home2" role="tabpanel">
        <div class="p-3">
            <!-- <h3>Ethereum pay</h3> -->
            <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="" style="margin: 20px 0 30px; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                <h1 style="font-size: 2rem;font-family: Nunito, sans-serif;color: #364a63;font-weight: 700;letter-spacing: -0.03em;">You are about to deposit <?= isset($currency) ? $currency : "$" ?> <?= isset($fundamount) ? $fundamount : "" ?></h1>
                <h6 style="font-size: 18px;font-family: Nunito, sans-serif;font-weight: 500;color: #364a63;">We support eth recharge, the recharge amount: <span id="eth-val"></span>  </h6>
                 
                       <div class="ref-form mt-4">
                        <form action="fundaccount.php" method="post" >
                            <div class="input-group mb-3 mt-3">
                                <div class="input-group-prepend">
                                  <button class="copy" onclick="ethcopy(event);" type="button">Copy</button>
                                </div>
                                <input type="text" class="form-control" id="eth-addr" value="<?= isset($adminEthAdr) ? $adminEthAdr : "" ?>" aria-label="" aria-describedby="basic-addon1">
                                <div style="width:100%; margin:10px auto"><span class=" alert alert-success" id="copy-suc" style="font-size:16px;"></span></div>

                                <input type="hidden" name="fundamount"  value="<?= isset($fundamount) ? $fundamount : "" ?>"  id="eth-dollar" class="form-control">
                                <input type="hidden" name="usd" value="<?= !empty($username) ? $username : '';?>">
                                <input type="hidden" name="email" value="<?= !empty($email) ? $email : '';?>">
                                <input type="hidden" name="firstname" value="<?= !empty($firstname) ? $firstname : '';?>">
                                <input type="hidden" name="lastname" value="<?= !empty($lastname) ? $lastname : '';?>">
                                <input type="hidden" name="paytype" value="eth">
                              </div>
                        
                        <div class="coin-addr text-center" style="width:100%; margin-top:20px">
                                <img style="max-width:50%" src="<?= isset($adminEthQr) ? $adminEthQr : "" ?>" alt="">
                        </div>

                        <div class="confirm text-center mt-3 mb-3" style="width:100%;">
                          <button type="submit" name="paynow" class="btn btn-primary">Done</button>
                        </div>
                        </form>
                        <div class="contacts col-lg-9 col-md-9 col-sm-12 col-xs-12" style="display: flex; justify-content: space-around; text-align:start; margin-top: 30px;">
                           <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/eth-icon.png" alt="ethereum"><span style="font-size:16px; margin-left:25px "> ETH</span></span> 
                            <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/btc-icon.png" alt="bitcoin"><span style="font-size:16px; margin-left:25px ">BTC</span></span>
                            <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/bnb-icon.png" alt="binance coin"><span style="font-size:16px; margin-left:25px ">BNB</span></span>
                          
                        </div>
                        <div class="share" style="margin-top: 30px; text-align:center">
                        <style>
                          .howto{
                            color: #526484;
                          }
                            .howto:hover{
                                color:#0770FE;
                            }
                        </style>
                            <a  href="https://www.youtube.com/results?search_query=how+to+top+up+ethereum+wallet"><span class="howto" style="font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-weight: 400;font-size: 20px;">How to top up a eth wallet?</span></a>
                        </div>
                       </div>
                    </div>
                </div>
        </div>
    </div>


    <div class="tab-pane  p-3" id="profile2" role="tabpanel">
        <!-- <h3>bitcoin pay</h3> -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="" style="margin: 20px 0 30px; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                <h1 style="font-size: 2rem;font-family: Nunito, sans-serif;color: #364a63;font-weight: 700;letter-spacing: -0.03em;">You are about to deposit <?= isset($currency) ? $currency : "$" ?> <?= isset($fundamount) ? $fundamount : "" ?></h1>
                <h6 style="font-size: 18px;font-family: Nunito, sans-serif;font-weight: 500;color: #364a63;">We support btc recharge, the recharge amount: <span id="btc-val"></span> </h6>
                 
                       <div class="ref-form mt-4">
                        <form action="fundaccount.php" method="post">
                            <div class="input-group mb-3 mt-3">
                                <div class="input-group-prepend">
                                  <button class="copy"  onclick="btccopy(event);" type="button">Copy</button>
                                </div>
                                <input type="text" id="btc-addr" class="form-control" value="<?= isset($adminBtcAdr) ? $adminBtcAdr : "" ?>" aria-label="" aria-describedby="basic-addon1">
                                <div style="width:100%; margin:10px auto"><span class=" alert alert-success" id="btccopy-suc" style="font-size:16px;"></span></div>

                                <input type="hidden" name="fundamount" value="<?= isset($fundamount) ? $fundamount : "" ?>"  id="btc-dollar" class="form-control">
                                <input type="hidden" name="usd" value="<?= !empty($username) ? $username : '';?>">
                                <input type="hidden" name="email" value="<?= !empty($email) ? $email : '';?>">
                                <input type="hidden" name="firstname" value="<?= !empty($firstname) ? $firstname : '';?>">
                                <input type="hidden" name="lastname" value="<?= !empty($lastname) ? $lastname : '';?>">
                                <input type="hidden" name="paytype" value="btc">
                              </div>
                        
                        <div class="coin-addr text-center" style="width:100%; margin-top:20px;">
                                <img style="max-width:50%" src="<?= isset($adminBtcQr) ? $adminBtcQr : "" ?>" alt="">
                        </div>
                        <div class="confirm text-center mt-3 mb-3" style="width:100%;">
                          <button type="submit" name="paynow" class="btn btn-primary">Done</button>
                        </div>
                        </form>
                        <div class="contacts col-lg-9 col-md-9 col-sm-12 col-xs-12" style="display: flex; justify-content: space-around; text-align:start; margin-top: 30px;">
                           <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/eth-icon.png" alt="whatsapp"><span style="font-size:16px; margin-left:20px "> ETH</span></span> 
                            <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/btc-icon.png" alt="facebook"><span style="font-size:16px; margin-left:20px ">BTC</span></span>
                            <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/bnb-icon.png" alt="messenger"><span style="font-size:16px; margin-left:20px ">BNB</span></span>
                        </div>
                        <div class="share" style="margin-top: 30px; text-align:center">
                        <style>
                          .howto{
                            color: #526484;
                          }
                            .howto:hover{
                                color:#0770FE;
                            }
                        </style>
                            <a  href="https://www.youtube.com/results?search_query=how+to+top+up+bitcoin+wallet"><span class="howto" style="font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-weight: 400;font-size: 20px;">How to top up a btc wallet?</span></a>
                        </div>
                       </div>
                    </div>
                </div>
    </div>

    <div class="tab-pane p-3" id="messages2" role="tabpanel">
        <!-- <h3>Binance pay</h3> -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="" style="margin: 20px 0 30px; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                <h1 style="font-size: 2rem;font-family: Nunito, sans-serif;color: #364a63;font-weight: 700;letter-spacing: -0.03em;">You are about to deposit <?= isset($currency) ? $currency : "$" ?> <?= isset($fundamount) ? $fundamount : "" ?></h1>
                <h6 style="font-size: 18px;font-family: Nunito, sans-serif;font-weight: 500;color: #364a63;">We support bnb recharge, the recharge amount: <span id="bnb-val"></span> </h6>
                 
                       <div class="ref-form mt-4">
                        <form action="fundaccount.php" method="post">
                            <div class="input-group mb-3 mt-3">
                                <div class="input-group-prepend">
                                  <button class="copy" onclick="bnbcopy(event);" type="button">Copy</button>
                                </div>
                                <input type="text" id="bnb-addr" class="form-control" value="<?= isset($adminBnbAdr) ? $adminBnbAdr : "" ?>" aria-label="" aria-describedby="basic-addon1">
                                <div style="width:100%; margin:10px auto"><span class=" alert alert-success" id="bnbcopy-suc" style="font-size:16px;"></span></div>

                                <input type="hidden" name="fundamount"  value="<?= isset($fundamount) ? $fundamount : "" ?>"  id="bnb-dollar" class="form-control">
                                <input type="hidden" name="usd" value="<?= !empty($username) ? $username : '';?>">
                                <input type="hidden" name="email" value="<?= !empty($email) ? $email : '';?>">
                                <input type="hidden" name="firstname" value="<?= !empty($firstname) ? $firstname : '';?>">
                                <input type="hidden" name="lastname" value="<?= !empty($lastname) ? $lastname : '';?>">
                                <input type="hidden" name="paytype" value="bnb">
                              </div>
                        
                        <div class="coin-addr text-center" style="width:100%; margin-top:20px">
                                <img style="max-width:50%" src="<?= isset($adminBnbQr) ? $adminBnbQr : "" ?>" alt="">
                        </div>
                        <div class="confirm text-center mt-3 mb-3" style="width:100%;">
                          <button type="submit" name="paynow" class="btn btn-primary">Done</button>
                        </div>
                        </form>
                        <div class="contacts col-lg-9 col-md-9 col-sm-12 col-xs-12" style="display: flex; justify-content: space-around; text-align:start; margin-top: 30px;">
                           <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/eth-icon.png" alt="whatsapp"><span style="font-size:16px; margin-left:20px "> ETH</span></span> 
                            <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/btc-icon.png" alt="facebook"><span style="font-size:16px; margin-left:20px ">BTC</span></span>
                            <span><img style="width: 40px; height: 40px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/bnb-icon.png" alt="messenger"><span style="font-size:16px; margin-left:20px ">BNB</span></span>
                        </div>
                        <div class="share" style="margin-top: 30px; text-align:center">
                        <style>
                          .howto{
                            color: #526484;
                          }
                            .howto:hover{
                                color:#0770FE;
                            }
                        </style>
                            <a  href="https://www.youtube.com/results?search_query=how+to+top+up+binance+wallet"><span class="howto" style="font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-weight: 400;font-size: 20px;">How to top up a bnb wallet?</span></a>
                        </div>
                       </div>
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

<script>
    var eth_dollar = document.querySelector("#eth-dollar").value;
    var eth_val = document.querySelector("#eth-val");
    $.get("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD",function(data){
     let ETH_amount = eth_dollar / data["USD"],
         final_value = ETH_amount.toFixed(8)
     eth_val.innerText = final_value
    });


    function ethcopy(e){
      e.preventDefault();
    var copyTxt = document.getElementById("eth-addr");
    var alats = document.getElementById("copy-suc");
    copyTxt.select();
    document.execCommand("copy");
    alats.innerText = "Copied";
    alats.style.display = "inline-block";
    setTimeout(function() {
        alats.style.display = "none";
        }, 1000);
    }
</script>
<script>
    var btc_dollar = document.querySelector("#btc-dollar").value;
    var btc_val = document.querySelector("#btc-val");
    $.get("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD",function(data){
     let BTC_amount = btc_dollar / data["USD"],
         btc_value = BTC_amount.toFixed(8)
     btc_val.innerText = btc_value
    });


    function btccopy(e){
      e.preventDefault();
    var copyTxt = document.getElementById("btc-addr");
    var alats = document.getElementById("btccopy-suc");
    copyTxt.select();
    document.execCommand("copy");
    alats.innerText = "Copied";
    alats.style.display = "inline-block";
    setTimeout(function() {
        alats.style.display = "none";
        }, 1000);
    }
</script>

<script>
    var bnb_dollar = document.querySelector("#bnb-dollar").value;
    var bnb_val = document.querySelector("#bnb-val");
    $.get("https://min-api.cryptocompare.com/data/price?fsym=BNB&tsyms=USD",function(data){
     let BNB_amount = bnb_dollar / data["USD"],
         bnb_value = BNB_amount.toFixed(8)
         console.log(bnb_value)
     bnb_val.innerText = bnb_value
    });


    function bnbcopy(e){
      e.preventDefault();
    var copyTxt = document.getElementById("bnb-addr");
    var alats = document.getElementById("bnbcopy-suc");
    copyTxt.select();
    document.execCommand("copy");
    alats.innerText = "Copied";
    alats.style.display = "inline-block";
    setTimeout(function() {
        alats.style.display = "none";
        }, 1000);
    }
</script>
</body>

</html>