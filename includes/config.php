<?php
	ob_start();
	session_start();
	
	$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");
	
	$con = mysqli_connect("localhost", "root", "", "ricomtrc_caps2");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?> 
<?php

