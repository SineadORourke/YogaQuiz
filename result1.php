<?php
	/*This file returns the Sanscript name of the card that was chosen by the user (saved in a hidden div on yogaGame1.html)*/
	
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
	 
	//Get id of the clicked card from the POST request
	$id=$_REQUEST['id'];
	
	
	//SQL to select the sanscript word of the card chosen
	$sql = "SELECT * FROM yogacards WHERE cardno = '$id'";
	$result = mysqli_query($conn, $sql);
	
	//Print of result set
	while($row = mysqli_fetch_array($result)){
		echo "<div id='choosen'><h1>".$row['sanscript']."</h1></div>"; 
	}	
   
	//close connection
	mysqli_close($conn);

?>
