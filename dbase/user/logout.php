<?php
session_start();
unset($_SESSION['username']);
header('Location: ../../account_2/login.php');
?>