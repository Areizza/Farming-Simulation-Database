<?php
	session_start();
	
	if (isset($_SESSION["session_flag"])) {
		if($_SESSION["session_flag"] == "valid") {
		echo "<form action = \"insertData_save.php\" method = \"POST\">
			Object Name: <input type = \"text\" name = \"objectname\" /> <br /> 
			Quantity: <input type = \"int\" name = \"quantity\" /> <br /> 
			Quality: <input type = \"int\" name = \"quality\" /> <br /> 
			Resulting Object Name: <input type = \"text\" name = \"resulting\" /> <br /> 
			<input type = \"submit\" />
		  </form> "; 
		} else {
			echo "Invalid session!";
		}
	} else {
		echo "Session not set!"; 
		echo "<a href=\"main.html\">Click here </a> to go back to the main page.";		
	}
	
?>
