<?php

	include 'dbcon.php';

	if(isset($_GET['deposid'])){
		$depositid = $_GET['deposid'];

		$sql = "SELECT * FROM depositrequest WHERE depositid='$depositid'";
		$result = mysqli_query($dbconnec,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$sql = "DELETE FROM depositrequest WHERE depositid='$depositid'";
				mysqli_query($dbconnec,$sql);
				header("Location:../user/history.php?deldepos");
				exit();

			}

		}


		
	}