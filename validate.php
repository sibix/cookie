<?php
	
	$val1=$_GET["logname"];
	$val2=$_GET["pass"];


	setcookie("logname",$val1);

	if($val1==''){
					echo "Please enter the Login name";
				
					echo "<html>";

							echo "<head>";
								echo "<title>Validate</title>";
							echo "</head>";	

							echo "<body>";
								echo "<a href='information.html'>Back</a>";
							echo "</body>";
					echo "</html>";
	}

	elseif($val2==''){
						echo "Please enter the password";
				
						echo "<html>";

								echo "<head>";
									echo "<title>Validate</title>";
								echo "</head>";	

								echo "<body>";
									echo "<a href='information.html'>Back</a>";
								echo "</body>";
						echo "</html>";
	}

	else {
		header("Location:homepage.php");
	}		
?>
