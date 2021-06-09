<?php
		$hostname = "34.206.113.91";
		$user = "thanh";
		$pass = "thanh@123";
		$db = "no1sl";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>