<?php
	
	//Store the value of the cookie logname

	$logcookie=$_COOKIE["logname"];

	//Display various items available for shopping

	echo "<html>";

		echo "<head>";
			echo "<title>Homepage</title>";
		echo "</head>";

		echo "<body>";

				echo "<align='right'>";

			//Welcome address with name
			echo "Welcome $logcookie <br>";
			echo "<a href='logout.php'>Logout</a>";

			echo "<center>";		
			echo "<h3>Shoppers paradise</h3>";
			echo "<h5>Shop till you drop!!!</h5>";
			echo "<br>";
			echo "<br>";

			echo "<table>";
				echo "<tr align='center'>";



			echo "</table>";

		echo "</body>";

	echo "</html>";
	





?>
