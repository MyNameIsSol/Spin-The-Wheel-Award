<?php
include 'dbcon.php';
if(isset($_POST['spinpacent'])){
    $spinpacent = floatval($_POST['spinpacent']);
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username='$username' ";
    $result = mysqli_query($dbconnec,$sql);
    $result_check = mysqli_num_rows($result);
    if($result_check > 0){
    while($data = mysqli_fetch_assoc($result)){
    $lev_2amt = $data['lev_2amt'];
    $lev_4amt = $data['lev_4amt'];
    $spin_pacent = $data['spin_pacent'];
    }
    $lev_2amt =  $lev_2amt * $spinpacent/100;
    $lev_4amt =  $lev_4amt * $spinpacent/100;

    $sql = "UPDATE users

    SET lev_2amt='$lev_2amt', lev_4amt='$lev_4amt', spin_pacent='$spinpacent'

    WHERE username='$username'

    ";
    mysqli_query($dbconnec,$sql);
}
    header("Location:../user/upgrade.php?p_changed");
    exit;
}else{
    header("Location:../user/upgrade.php");
    exit;
}
?>