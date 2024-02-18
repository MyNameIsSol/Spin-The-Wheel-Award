<?php
include 'dbcon.php';
if(isset($_POST['walbal'])){
    $spinamt = floatval($_POST['walbal']);
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username='$username' ";
    $result = mysqli_query($dbconnec,$sql);
    $result_check = mysqli_num_rows($result);
    if($result_check > 0){
    while($data = mysqli_fetch_assoc($result)){
    $walletbal = $data['walletbal'];
    $spin = $data['spin'];
    }
    $currentwalletbal =  $walletbal + $spinamt;
    $spin = 0;

    $sql = "UPDATE users

    SET walletbal='$currentwalletbal', spin='$spin'

    WHERE username='$username'

    ";
    mysqli_query($dbconnec,$sql);
}
    header("Location:../user/index.php");
    exit;
}else{
    header("Location:../user/index.php");
    exit;
}
?>