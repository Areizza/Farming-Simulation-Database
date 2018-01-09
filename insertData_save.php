<?php
	
	session_start();
	if (isset($_SESSION["session_flag"])) {
		if($_SESSION["session_flag"] == "valid") {
			$host = "HOST WEBSITE";
			$user = "MY USERNAME";
			$pass = "*******";
			$db = "DATABASE NAME";
			$conn = mysql_connect("$host", "$user", "$pass");
			$dblink = mysql_select_db("DATABASE");
			// Check connection
			if(!$dblink){
				die("ERROR: Could not connect. " . mysql_error());
			}
			if (isset($_POST)) { 
				// Escape user inputs for security
				$ObjectName = $_POST['objectname'];
				$Quantity = $_POST['quantity'];
				$Quality = $_POST['quality'];
				$Resulting = $_POST['resulting'];
				echo 'You have ' .$Quantity.  ' of ' .$Quality. ' quality ' .$ObjectName.'<br>'; 
				echo 'You can combine it to create ' .$Resulting. '<br><br>'; 
			} 
			// attempt insert query execution
			$sql = "INSERT INTO Object (ObjectName, Quantity, Quality, ResultingObjectName) VALUES ('$ObjectName', '$Quantity', '$Quality', '$Resulting')";
			$query = mysql_query($sql); 
			if(! $query ) {
				die('ERROR: ' . mysql_error());
			} else {
				echo "Record added successfully. <br />";
			}
			 
			// close connection
			mysql_close();
			
			echo "<a href=\"viewAll.php\"> Click here </a> to view list of all objects. <br>"; 
			echo "<a href=\"main.html\"> Click here </a> to go to main menu."; 
		} else {
			echo "Invalid session!";
		}
	} else {
		echo "Session not set!"; 
		echo "<a href=\"login.html\">Click here </a> to go back to the main page.";		
	}
	
?>
