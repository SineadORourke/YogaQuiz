<?php
	/*This file returns Quiz 2 from the database (4 words - one pic), and is called in yogaGame2.html */
	
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
	$eng1=$_REQUEST['eng1'];
	$eng2=$_REQUEST['eng2'];
	$eng3=$_REQUEST['eng3'];
	$eng4=$_REQUEST['eng4'];

	
	//SQL to get the card
	$sql1 = "SELECT * FROM yogacards WHERE cardno = '$eng1'";
	$result = mysqli_query($conn, $sql1);
	
	//Print out the result set
	while($row = mysqli_fetch_array($result)){
		echo "</br>";
		echo "<img id=".$row['cardno']." src=YogaCardsEng/".$row['cardref']." alt 'DefaultCard' width='350' height='350' onclick='checkCorrect()'>"; 
		echo "<div id='toChoose'><h1>".$row['english']."</h1></div>";
		echo "</br>";
	}	
	
	
	//SQL to get the 4 english words
    $sql2 = "SELECT * FROM yogacards WHERE cardno = '$eng1' OR cardno = '$eng2' OR cardno = '$eng3' OR cardno = '$eng4'";
	$result = mysqli_query($conn, $sql2);

	
	//Printing out the result set
	echo "</br>";
	while($row = mysqli_fetch_array($result)){ 
		echo "<button type='button' id=".$row['cardno']." class='btn btn-default btn-lg btn-block blockButton' onclick='check()'>".$row['english']."</button>";
	}	

	//close connection
	mysqli_close($conn);

?>
