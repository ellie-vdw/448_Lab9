<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$a1 = $_POST["q1"];
	$a2 = $_POST["q2"];
	$a3 = $_POST["q3"];
	$a4 = $_POST["q4"];
	$a5 = $_POST["q5"];
	$total = 0;
	
	if ($a1 =="B"){$total++;}
	if ($a2 =="A"){$total++;}
	if ($a3 =="C"){$total++;}
	if ($a4 =="B"){$total++;}
	if ($a5 =="D"){$total++;}
	
	echo "Q1: What is the highest-grossing film of all time without taking inflation into account?<br>";
	if ($a1 == "A"){echo "Your answer: Titanic<br>";}
	if ($a1 == "B"){echo "Your answer: Avengers Endgame<br>";}
	if ($a1 == "C"){echo "Your answer: Avatar<br>";}
	if ($a1 == "D"){echo "Your answer: Star Wars: The Force Awakens<br>";}
	echo "Correct Answer: Avengers Endgame<br>";
	
	echo "Q2: What movie did Tom Hanks score his first Academy Award nomination?<br>";
	if ($a2 == "A"){echo "Your answer: Big<br>";}
	if ($a2 == "B"){echo "Your answer: Forrest Gump<br>";}
	if ($a2 == "C"){echo "Your answer: Cast Away<br>";}
	if ($a2 == "D"){echo "Your answer: Saving Private Ryan<br>";}
	echo "Correct Answer: Big<br>";
	
	echo "Q3: What song plays over the opening credits of Guardians of the Galaxy?<br>";
	if ($a3 == "A"){echo "Your answer: Hooken on a Feeling<br>";}
	if ($a3 == "B"){echo "Your answer: Cherry Bomb<br>";}
	if ($a3 == "C"){echo "Your answer: Come and Get Your Love<br>";}
	if ($a3 == "D"){echo "Your answer: I Want You Back<br>";}
	echo "Correct Answer: Come and Get Your Love<br>";
	
	echo "Q4: How many suns does Luke’s home planet of Tatooine have in Star Wars??<br>";
	if ($a4 == "A"){echo "Your answer: 3<br>";}
	if ($a4 == "B"){echo "Your answer: 2<br>";}
	if ($a4 == "C"){echo "Your answer: 1<br>";}
	if ($a4 == "D"){echo "Your answer: 0<br>";}
	echo "Correct Answer: 2<br>";
	
	echo "Q5: How many Oscars has Meryl Streep been nominated for?<br>";
	if ($a5 == "A"){echo "Your answer: 30<br>";}
	if ($a5 == "B"){echo "Your answer: 28<br>";}
	if ($a5 == "C"){echo "Your answer: 26<br>";}
	if ($a5 == "D"){echo "Your answer: 21<br>";}
	echo "Correct Answer: 21<br>";
	echo "total " .$total . "/5<br>";
	$percent = $total/5;
	$percent = $percent*100;
	echo "percent " .$percent . "%<br>";
?>