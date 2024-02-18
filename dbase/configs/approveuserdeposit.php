<?php
	
	  // session_start();
include 'dbcon.php';

if(isset($_POST["approvedep"])){

$depositid =mysqli_real_escape_string($dbconnec,$_POST['depositid']);

$sql = "SELECT * FROM depositrequest WHERE depositid='$depositid' ";
$result= mysqli_query($dbconnec,$sql);
$result_checker= mysqli_num_rows($result);

if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){
    $username = $data['username'];
    $btcaddr = $data['btcaddr'];
    $plan = $data['plan'];
    $amount = $data['amount'];
    $dateofdep = $data['dep_date'];
    $statusofdep = $data['statusofdep'];
    $email = $data['email'];
    $depositid = $data['depositid'];
    $walletbal = $data['walletbal'];

    $latestranstactstatus="Approved";

    // CALACULATE DEPOSIT PLUS CURRENT BALANCE
    // $walletbal = $data['walletbal'];

    $currentwalletbalance=$walletbal+$amount;

    // $refbonusfirst = 0.3 * $amount;
    $refbonusfirst = 5;

    // UPDATE TRANSACTION STATUS
$sql = "UPDATE depositrequest

SET statusofdep='$latestranstactstatus', walletbal='$currentwalletbalance'

WHERE depositid='$depositid'

";
//SEND CREDIT EMAIL TO USER ON DEPOSIT APPROVAL

// $currentwalletbal =  $walletbal + $amount;
mysqli_query($dbconnec,$sql);


//UPDATE USER TABLE
$sql = "SELECT * FROM users WHERE username='$username' ";
$result = mysqli_query($dbconnec,$sql);
$result_check = mysqli_num_rows($result);
if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){

$walletbal = $data['walletbal'];

$currentwalletbal =  $walletbal + $amount;

$sql = "UPDATE users

SET walletbal='$currentwalletbal'

WHERE username='$username'

";
mysqli_query($dbconnec,$sql);


//PAY YOUR REFEREE
$sql = "SELECT * FROM reftable WHERE username='$username'";
$result = mysqli_query($dbconnec,$sql);
$result_check = mysqli_num_rows($result);

if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){
$referee = $data['referee'];
$refcode = $data['refcode'];

$sql = "SELECT * FROM users WHERE username='$referee' ";
$result = mysqli_query($dbconnec,$sql);
$result_check = mysqli_num_rows($result);

if($result_checker > 0){
while($data = mysqli_fetch_assoc($result)){

$usdd = $data['username'];
$rwalletbal = $data['walletbal'];
$emailr= $data['email'];
$refpaid = $data['refpaid'];
$firstname= $data['firstname'];
$lastname = $data['lastname'];

if($refpaid == "yes"){


}else{

    $sql = "UPDATE reftable

    SET bonus='$refbonusfirst',status='PAID'

    WHERE username='$username'

            ";

    mysqli_query($dbconnec,$sql);

$refbonusadding = $rwalletbal + $refbonusfirst;
$refstatus = "yes";


$sql = "UPDATE users

SET walletbal='$refbonusadding',refpaid='$refstatus'

WHERE username='$usdd'

";

   //SEND REFERRAL BONUS EMAIL


         mysqli_query($dbconnec,$sql);

            }
          }
        }
       }
    }
  }
}
        $msg = "User deposit has been approved";
        header ("Location:../adminarea/depositrequest.php?depsuc=".$msg);
        exit();
		}
	}
	  }else{
          $errer = "Deposit Declined";
	  	header ("Location:../adminarea/depositrequest.php?deperror=".$error);
        exit();
	  }