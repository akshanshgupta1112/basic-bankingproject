<?php

	$conn = mysqli_connect('localhost','root','','india_smallfinance');

	if(!$conn){
		die("Not able to connect to the database because of these errors --> ".mysqli_connect_error());
	}

?>