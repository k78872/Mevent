<html>
<body>

	<?php

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$user_name = "root";
		$dbpassword = "password";
		$database = "qr";
		$server = "localhost";
		$connection=mysql_connect($server, $user_name, $dbpassword);
	if($connection) //when connection established
	{
		echo "<center>Connection established</center>"."<br>";
		$db_found = mysql_select_db($database,$connection);

		if($db_found)   //when database found
		{
			echo "<center>Database found and connected </center>"."<br>";
			$query="SELECT * FROM registration WHERE userid='" . $id . "'";
			$result=mysql_query($query,$connection);
			$cursor=mysql_fetch_assoc($result); 
			var_dump($cursor);

/*				$pass=$cursor['password'];
				if($pass==$password)
				{
					header("Location:events.html");
				}
				else
				{
					echo "Mismatch login details";
				} */
				mysql_close($connection);

			}
		else //when databaes not found
		{
			echo "No database found with the given name";
			mysql_close($connection);
		}
	}
	else //when connection is not established
	{
		echo "Connection Not established";
	}
	}
	else
		echo "no get";

?>
</body>
</html>