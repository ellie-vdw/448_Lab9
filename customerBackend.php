<?php
	echo "Welcome!<br>";
	$pass = $_POST["password"];
	$item1 = $_POST["item1"];
	$item2 = $_POST["item2"];
	$item3 = $_POST["item3"];
	$shipping = $_POST["shipping"];
	$total = 0;
	echo "Password: " .$pass . "<br>";
	
	//echo"<div id="receipt">";
	//couldn't for the life of me, get this to link to css
	echo "	<br>
		<p> Quantity Cost Per Item Subtotal</p>";
		if ($item1 == "HarryPotter"){
			echo "<p>Harry Potter 1 $50.00 $50.00</p>";
			$total = $total + 50;
		}
		else{
			echo "<p>Harry Potter 0 $50.00 $0.00</p>";
		}
		//echo"<p>Percy Jackson</p>";
		if ($item2 == "PercyJackson"){
			echo"<p>Percy Jackson 1 $45.00 $45.00</p>";
			$total = $total + 45;
		}
		else{
			echo "<p>Percy Jackson 0 $45.00 $0.00</p>";
		}
		//echo"<p>Hunger Games</p>";
		if ($item2 == "HungerGames"){
			echo "<p>Hunger Games 1 $35.00 $35.00</p>";
			$total = $total + 35;
		}
		else{
			echo "<p>Hunger Games 0 $35.00 $0.00</p>";
		}
		//echo "<p>Shipping</p>";
		if($shipping == "free")
		{
			echo "<p>Shipping Free 7 Day $0.00</p>";
		}
		else if($shipping == "50")
		{
			echo"<p>Shipping Over Night $50.00</p>";
			$total = $total + 50;
		}
		else
		{
			echo "<p>Shipping Three Day 5.00</p>";
			$total = $total + 5;
		}
		echo "<p>Total: $total</p>";

?>