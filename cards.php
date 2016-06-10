<?php
	/*This file returns Quiz 1 from the database (4 pics - one word), and is called in yogaGame1.html*/
	
	//Variables to hold permission details
	$servername = "localhost";
	$username = "yogaPlayer";
	$password = "yoga";
	$db = "yogaquiz";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if (mysqli_connect_error()) {
    	die("Database connection failed: " . mysqli_connect_error());
	}
	
	//Get randomly generated numbers 
	$card1=$_REQUEST['card1'];
	$card2=$_REQUEST['card2'];
	$card3=$_REQUEST['card3'];
	$card4=$_REQUEST['card4'];
	
	
	//SQL to get the sanscript word
	$sql1 = "SELECT * FROM yogacards WHERE cardno = '$card1'";
	$result = mysqli_query($conn, $sql1);
	//Print out result
	while($row = mysqli_fetch_array($result)){
		echo "<div id='toChoose'><h1>".$row['sanscript']."</h1></div><br/><br/>"; 
	}	
	
	
	//SQL to get the 4 cards
    $sql2 = "SELECT * FROM yogacards WHERE cardno = '$card1' OR cardno = '$card2' OR cardno = '$card3' OR cardno = '$card4'";
	$result = mysqli_query($conn, $sql2);

	//Printing out the result set
	while($row = mysqli_fetch_array($result)){
		echo "<img id=".$row['cardno']." src=YogaCardsSans/".$row['cardref']." alt 'DefaultCard' width='350' height='350' onclick='checkCorrect()'>"; 
	}	

	//close connection
	mysqli_close($conn);

?>
