<?php
$dbserver = "localhost";
$dbusname = "root";
$dbpass = "";
$dbname = "pridespin";


$dbconnec = mysqli_connect($dbserver,$dbusname,$dbpass,$dbname);
if($dbconnec->connect_error){
    die('<p>Failed to connect to MySQL: '.$dbconnec_error.'</p>');
}
?>