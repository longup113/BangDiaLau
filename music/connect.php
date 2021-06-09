<?php
		$hostname = "35.172.43.136";
		$user = "thanh";
		$pass = "thanh@123";
		$db = "no1sl";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>