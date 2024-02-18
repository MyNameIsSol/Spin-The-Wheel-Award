<?php
	include 'dbcon.php';

	// session_start();
	if(isset($_POST['updateuser'])){
		$firstnam = mysqli_real_escape_string($dbconnec,$_POST['firstnam']);
		$lastnam = mysqli_real_escape_string($dbconnec,$_POST['lastnam']);
		$emai = mysqli_real_escape_string($dbconnec,$_POST['emai']);
		$phon = mysqli_real_escape_string($dbconnec,$_POST['phon']);
		$us = mysqli_real_escape_string($dbconnec,$_POST['us']);
        $pw = mysqli_real_escape_string($dbconnec,$_POST['pw']);
		// $pw = mysqli_real_escape_string($dbconnec,$_POST['pw']);
        $bankname = mysqli_real_escape_string($dbconnec,$_POST['bankname']);
        $btcadd = mysqli_real_escape_string($dbconnec,$_POST['btcadd']);
        $spin = (int)mysqli_real_escape_string($dbconnec,$_POST['spin']);
        $currentplan = mysqli_real_escape_string($dbconnec,$_POST['plan']);
		$walletba = mysqli_real_escape_string($dbconnec,$_POST['walletba']);
        // echo $spin;
        // exit;
 
        $sql = "SELECT * FROM users WHERE username='$us' ";
        $result= mysqli_query($dbconnec,$sql);
        $result_checker= mysqli_num_rows($result);

        if($result_checker > 0){
            $sql = "UPDATE users

            SET firstname='$firstnam',lastname='$lastnam',email='$emai',phone='$phon',username='$us',passwd='$pw',bankname='$bankname',btcaddr='$btcadd',spin='$spin',walletbal='$walletba',currentplan='$currentplan'
        
            WHERE username = '$us'
            ";
        
        if(!mysqli_query($dbconnec,$sql)){
            die("Error: ".mysqli_error($dbconnec));
        }
            $msg = "user updated...";
            header("Location:../adminarea/adminupdateuser.php?updatesuc=".$msg);
            exit();
    }

	}else{
        $error = "sorry! can't update user";
		header("Location:../adminarea/adminupdateuser.php?updateerr=".$error);
		// exit();
	}