<?php
include 'dbcon.php';
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username='$username' ";
    $result = mysqli_query($dbconnec,$sql);
    $result_check = mysqli_num_rows($result);
    if($result_check > 0){
    while($data = mysqli_fetch_assoc($result)){
    $spin = $data['spin'];
    }
    if($spin < 1){
    $newspin =  $spin + 1;
    }else{
    $newspin = 1;
    }
    $sql = "UPDATE users

    SET spin='$newspin'

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