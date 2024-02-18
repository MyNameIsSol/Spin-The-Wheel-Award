<?php
include 'dbcon.php';
$tbname = 'withdrawalrequest';
$tbcols = 'id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(22) NOT NULL,
        email VARCHAR(225) NOT NULL,
        withdrawalid VARCHAR(225) NOT NULL,
        btcaddr VARCHAR(22) NOT NULL,
        bankname VARCHAR(22) NOT NULL,
        amount VARCHAR(22) NOT NULL,
        transtype VARCHAR(22) NOT NULL,
        statusofwith VARCHAR(22) NOT NULL,
        walletbal VARCHAR(225) NOT NULL,
        with_date DATETIME NOT NULL';
if($dbconnec){
$sql = "CREATE TABLE IF NOT EXISTS $tbname($tbcols)";
if(!mysqli_query($dbconnec, $sql)){
    $error = "could'nt send withdrawal request";
    header ("Location:requestwithdrawal.php?tableerror=".$error);
    exit();
  }
}

if(isset($_POST['withdraw'])){

// !empty($_POST['acctname']) ? $acctname=mysqli_real_escape_string($dbconnec,$_POST['acctname']) : $acctname=" ";
$amount=mysqli_real_escape_string($dbconnec,$_POST['withamt']);
$walletbal=mysqli_real_escape_string($dbconnec,$_POST['walletbal']);

$username=mysqli_real_escape_string($dbconnec,$_POST['usd']);
$useremail=mysqli_real_escape_string($dbconnec,$_POST['email']);
$firstname=mysqli_real_escape_string($dbconnec,$_POST['firstname']);
$lastname=mysqli_real_escape_string($dbconnec,$_POST['lastname']);


$date= date('Y-m-d H:i:s');
$status="Pending";

$withid=uniqid();
$withid = "wt".substr($withid,0,3).substr($withid,-3,3);
$transtype = "Withdrawal";

$sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($dbconnec, $sql);
    $result_checker = mysqli_num_rows($result);
    if ($result_checker > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $paytyp = $data['bankname'];
            $detai = $data['btcaddr'];
        }
    }
$sql="INSERT INTO withdrawalrequest (username,btcaddr,bankname,amount,with_date,statusofwith,walletbal,withdrawalid,email,transtype) VALUES ('$username','$detai','$paytyp','$amount','$date',' $status','$walletbal', '$withid','$useremail','$transtype')";

// admin receive email for client initiating withdrawal
 

// USER receive email for info on his/her withdrawal request    

if(!mysqli_query($dbconnec,$sql)){
  die("Error: ".mysqli_error($dbconnec));
}

header("Location:../user/withdraw.php?witsuc");
exit();

}else{
header("Location:../user/withdraw.php?error");
exit();
}


