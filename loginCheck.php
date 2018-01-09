<?php
	session_start();
	
	if (isset($_SESSION["session_flag"])) {
			if($_SESSION["session_flag"] == "valid") {
				print_menu();
			} else {
				echo "Invalid session!";
				echo "<a href=\"login.html\">Click here </a> to go back to the login page.";
			}
	} else if( $_POST["user"] || $_POST["password"] ) {
		if ($_POST["user"] == "Aldag" && $_POST["pass"] == "potato" ) {
			$_SESSION["session_flag"] = "valid";
			print_menu();
			
		} else {
			echo "Incorrect login or password. <br />";			
			echo "<a href=\"login.html\">Click here </a> to go back to the login page.";
		}
	  
	} else {
		echo "No login or password entered! <br />";
		echo "<a href=\"login.html\">Click here </a> to go back to the login page.";
	}
	
	function print_menu() {
		echo "You logged in successfully! <br />";
		echo "<br />";			
		echo "Welcome " .$_POST["user"]. "<br />";
		echo "<br />";	
		echo "<a href=\"main.php\">Click here</a> to view menu. <br />";
		echo "<a href=\"logout.php\">Click here</a> to logout. <br />";
	}
?>
