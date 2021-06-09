<?php
		$hostname = "3.135.230.91";
		$user = "thanh";
		$pass = "thanh@123";
		$db = "thanhvjp";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>