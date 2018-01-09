<?php
	
	session_start();
	if (isset($_SESSION["session_flag"])) {
		if($_SESSION["session_flag"] == "valid") {
			$host = "HOST WEBSITE";
			$user = "MY USERNAME";
			$pass = "************";
			$db = "DATABASE NAME";
			$conn = mysql_connect("$host", "$user", "$pass");
			$dblink = mysql_select_db("DATABASE");
			
			// Check connection
			if(!$dblink){
				die("ERROR: Could not connect. " . mysql_error());
			}
				
			$sql = 'SELECT ObjectName, Quantity, Quality FROM Object';
			mysql_select_db('priscillalo');
			$retval = mysql_query( $sql, $conn );
			   
			if(! $retval ) {
				die('Could not get data: ' . mysql_error());
			}
			   
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
				echo "Object Name :{$row['ObjectName']}  <br> ".
				 "Quantity : {$row['Quantity']} <br> ".
				 "Quality : {$row['Quality']} <br> ".
				 "--------------------------------<br>";
			}
			   
			echo "Fetched data successfully <br><br>";
		   
			mysql_close($conn);
			
			echo "<a href=\"main.html\"> Click here </a> to go to main menu."; 
		} else {
			echo "Invalid session!";
		}
	} else {
		echo "Session not set!"; 
		echo "<a href=\"login.html\">Click here </a> to go back to the main page.";		
	}
	
?>
