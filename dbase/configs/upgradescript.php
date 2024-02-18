<?php
include 'dbcon.php';
// include 'userhead.php';
if (isset($_POST['upgrade'])) {
    $investtype = mysqli_real_escape_string($dbconnec, $_POST['investtype']);
    $plan = mysqli_real_escape_string($dbconnec, $_POST['plan']);
    $min_earn = mysqli_real_escape_string($dbconnec, $_POST['min-earn']);
    $max_earn = mysqli_real_escape_string($dbconnec, $_POST['max-earn']);
    $spin = mysqli_real_escape_string($dbconnec, $_POST['spin']);
    $withdraw_no = mysqli_real_escape_string($dbconnec, $_POST['withdraw-no']);
    $invest_amount = mysqli_real_escape_string($dbconnec, $_POST['amount']);
    $username = mysqli_real_escape_string($dbconnec, $_POST['usd']);
   
    $ugid = uniqid();
    $ugid = "ug" . substr($ugid, 0, 3) . substr($ugid, -3, 3);

    $date = date('Y-m-d H:i:s');
    $status = "Successful";

    $sql = "SELECT * FROM users WHERE username='$username' ";
    $result = mysqli_query($dbconnec, $sql);
    $result_checker = mysqli_num_rows($result);

    if ($result_checker > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $walletbal = $data['walletbal'];
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $email = $data['email'];


            $tbname = 'upgrades';
            $tbcols = 'id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			username VARCHAR(225) NOT NULL,
            firstname VARCHAR(225) NOT NULL,
            lastname VARCHAR(225) NOT NULL,
			email VARCHAR(225) NOT NULL,
			plan VARCHAR(22) NOT NULL,
			amount VARCHAR(22) NOT NULL,
            investtype VARCHAR(22) NOT NULL,
            min_earn VARCHAR(22) NOT NULL,
            max_earn VARCHAR(22) NOT NULL,
            spin_no VARCHAR(22) NOT NULL,
            withdraw_no VARCHAR(22) NOT NULL,
			statusofug VARCHAR(22) NOT NULL,
            upgradeid VARCHAR(225) NOT NULL,
			ug_date DATETIME NOT NULL';
            if ($dbconnec) {
                $sql = "CREATE TABLE IF NOT EXISTS $tbname($tbcols)";
                if (!mysqli_query($dbconnec, $sql)) {
                    $error = "Could'nt send Upgrade request";
                    header("Location:../user/upgrade.php?tableerror=" . $error);
                    exit();
                }
            }

            $sql = "SELECT * FROM upgrades WHERE username='$username' ";
            $result = mysqli_query($dbconnec, $sql);
            $result_checker = mysqli_num_rows($result);
            if ($result_checker > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $dbplan = $data['plan'];
                    if($dbplan == $plan){
                    header("Location:../user/upgrade.php?plan-err");
                    exit();
                    }else{
                    $sql = "DELETE FROM upgrades WHERE username='$username'";
				    mysqli_query($dbconnec,$sql);
                    }
                }
            }
            $sql="INSERT INTO upgrades (username,firstname,lastname,email,plan,amount,investtype,min_earn,max_earn,spin_no,withdraw_no,statusofug,upgradeid,ug_date) VALUES 
            ('$username','$firstname','$lastname','$email','$plan','$invest_amount','$investtype','$min_earn','$max_earn','$spin','$withdraw_no','$status','$ugid','$date')";
            if(!mysqli_query($dbconnec,$sql)){
                die("Error: ".mysqli_error($dbconnec));
            }

            $currentwalletbal =  $walletbal - $invest_amount;

            $sql = "UPDATE users

            -- SET walletbal='$currentwalletbal', voucher=5000
            SET walletbal='$currentwalletbal',min_earn='$min_earn',max_earn='$max_earn',spin_no='$spin',spin='$spin',currentplan='$plan'
            WHERE username='$username'

            ";
            mysqli_query($dbconnec,$sql);

   

                // MAIL TO ADMIN FOR BTC PAYMENT

                // MAIL TO USER

                header("Location:../user/upgrade.php?ug-succ");
                exit();

        }

    }
} else {
    $error = "Cannot proccess request";
    header("Location:../user/upgrade.php?error" . $error);
    exit();
}
?>