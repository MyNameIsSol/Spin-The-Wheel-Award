<?php
    session_start();
    include 'dbcon.php';
    $tbname = 'admins';
    $tbcols = 'id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(22) NOT NULL,
    lastname VARCHAR(22) NOT NULL,
    username VARCHAR(22) NOT NULL,
    email VARCHAR(225) NOT NULL,
    passwd VARCHAR(22) NOT NULL,
    adminid VARCHAR(22) NOT NULL,
    profileimg VARCHAR(225) NOT NULL,
    admintype VARCHAR(22) NOT NULL';
    if($dbconnec){
        $sql = "CREATE TABLE IF NOT EXISTS $tbname($tbcols)";
        if(!mysqli_query($dbconnec, $sql)){
            header ("Location:../../account_2/login.php?tableerror");
            exit();
          }
    }

$aname = "pride";
$aemail = "support@prideemergencyfund.com";
$apasswd = "pride100%";
$encrpt = md5($aemail.time());
$aid ="ad".substr($encrpt,0,3).substr($encrpt,-3,3);
$atype = "super";
$image = " ";
$sql = "SELECT * FROM admins WHERE email='$aemail'";
$result = mysqli_query($dbconnec,$sql);
$result_check = mysqli_num_rows($result);
if($result_check < 1){
    $sql ="INSERT INTO admins (firstname,lastname,username,email,passwd,adminid,profileimg,admintype) VALUES ('','','$aname','$aemail','$apasswd','$aid','$image','$atype')";
    if(!mysqli_query($dbconnec,$sql)){
        die("Error: ".mysqli_error($dbconnec));
        exit;
    }
}
    if(isset($_POST['login'])){
		$uname = mysqli_real_escape_string($dbconnec,$_POST['uname']);
        $pwd = mysqli_real_escape_string($dbconnec,$_POST['pwd']);
        if(empty($uname) || empty($pwd)){
            header("Location:../../account_2/login.php?loginempty");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username='$uname'";
            $result = mysqli_query($dbconnec,$sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1){
                $sql = "SELECT * FROM admins WHERE username='$uname'";
                $result = mysqli_query($dbconnec,$sql);
                $result_check = mysqli_num_rows($result);
                if($result_check < 1){
                header("Location:../../account_2/login.php?invaliduid");
                exit();
            }else{
                while($row=mysqli_fetch_assoc($result)){
                 $cpwd = $row['passwd'];
                 $username = $row['username'];
                 $email = $row['email'];
                 if($pwd != $cpwd){
                 header("Location:../../account_2/login.php?invalidpwd");
                 exit();
                 }elseif($pwd == $cpwd){
                     $_SESSION['adminname'] =$row['username'];
                    header("Location:../adminarea/dashboard.php?loginsuc");
                    exit();
           }
         }   
       }
            }else{
               if($row=mysqli_fetch_assoc($result)){
                $cpwd = $row['passwd'];
                $username = $row['username'];
                $email = $row['email'];
                $active = $row['active'];
                if($row['welbonus'] > 0){
                $_SESSION['welbonus'] = $row['welbonus'];
                }
                $sql = "SELECT * FROM reftable WHERE referee='$username'";
                $result = mysqli_query($dbconnec, $sql);
                $result_checker = mysqli_num_rows($result);
                if ($result_checker > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        if($data['bonus'] > 0){
                        $_SESSION['refbonus'] = $data['bonus'];
                        }
                    }
                }

                if($pwd != $cpwd){
                header("Location:../../account_2/login.php?invalidpwd");
                exit();
                }elseif($active == "deactivated"){
                    header("Location:../../account_2/login.php?deactiveacct");
                    exit();
                }elseif($pwd == $cpwd){
                    $_SESSION['username'] =$row['username'];
            header("Location:../user/index.php");
            exit();
          }
        }   
      }
    }
    }else{
        header("Location:../../account_2/login.php?loginerror");
        exit();
    }

    ?>