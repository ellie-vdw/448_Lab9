<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	for($x=1; $x<101; $x++)
	{
		echo "$x ";
	}
	echo "<br>";
	for($i=1; $i<101; $i++)
	{
		echo "$i ";
		for ($j=1; $j<101; $j++)
		{
			$z=$i*$j;
			echo "$z ";
		}
		echo "<br>";
	}

?>