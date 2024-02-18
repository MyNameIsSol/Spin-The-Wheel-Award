<?php

	include 'dbcon.php';

	if(isset($_GET['withid'])){
		$withid = $_GET['withid'];

		$sql = "SELECT * FROM withdrawalrequest WHERE withdrawalid='$withid'";
		$result = mysqli_query($dbconnec,$sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){

			while($data = mysqli_fetch_assoc($result)){

				$sql = "DELETE FROM withdrawalrequest WHERE withdrawalid='$withid'";
				mysqli_query($dbconnec,$sql);
				header("Location:../user/history.php?delwith");
				exit();

			}

		}


		
	}