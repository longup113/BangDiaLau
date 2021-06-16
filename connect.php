<?php
		$hostname = "18.218.33.185";
		$user = "thanh";
		$pass = "thanh@123";
		$db = "thanhvjp";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>