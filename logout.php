<?php
	session_start();
	
	session_unset();
	
	session_destroy();
	
	echo "You logged out successfully. <br />";		
	echo "<a href=\"login.html\">Click here</a> to go back to the login page. <br />";		
?>
