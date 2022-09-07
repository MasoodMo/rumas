<?php

	$conn = mysqli_connect('localhost','root','','tables', 3306);

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>