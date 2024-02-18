<?php
	include 'dbcon.php';
	if(isset($_POST['updatebank'])){
		$paytype = mysqli_real_escape_string($dbconnec,$_POST['payment-type']);
		$details = mysqli_real_escape_string($dbconnec,$_POST['details']);
		$password = mysqli_real_escape_string($dbconnec,$_POST['password']);
		$newpass = mysqli_real_escape_string($dbconnec,$_POST['newpass']);
		$cnewpass = mysqli_real_escape_string($dbconnec,$_POST['cnewpass']);
        $username = mysqli_real_escape_string($dbconnec,$_POST['username']);
        $email = mysqli_real_escape_string($dbconnec,$_POST['email']);

        if(empty($paytype) || empty($details) || empty($password)){
            header("Location:../user/banking.php?detailempty");
            exit();
        }elseif(!empty($newpass) || !empty($cnewpass)){
            if($newpass != $cnewpass){
                header("Location:../user/banking.php?passnotmatch");
                 exit();
            }else{
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($dbconnec,$sql);
            $result_check = mysqli_num_rows($result);
            if($result_check > 0){
            while($row=mysqli_fetch_assoc($result)){
                $dbpwd = $row['passwd'];
                if($password != $dbpwd){
                    header("Location:../user/banking.php?invalidpwd");
                    exit();
                    }elseif($password == $dbpwd){
                        $sql = "UPDATE users

                        SET bankname='$paytype',btcaddr='$details',passwd='$password'
        
                        WHERE username = '$username'
                        ";
                mysqli_query($dbconnec,$sql);
        
                header("Location:../user/banking.php?updated");
                exit();
              }
            }
        }
            }
        }else{
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($dbconnec,$sql);
            $result_check = mysqli_num_rows($result);
            if($result_check > 0){
            while($row=mysqli_fetch_assoc($result)){
                $dbpwd = $row['passwd'];
                if($password != $dbpwd){
                    header("Location:../user/banking.php?invalidpwd");
                    exit();
                    }elseif($password == $dbpwd){
                        $sql = "UPDATE users

                        SET bankname='$paytype',btcaddr='$details'
        
                        WHERE username = '$username'
                        ";
                mysqli_query($dbconnec,$sql);
        
                header("Location:../user/banking.php?updated");
                exit();
              }
            }
        }
        }
        
            
    }
    