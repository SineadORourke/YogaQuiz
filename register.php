<?php
	/*This file updates the yogaPlayers.json file with a new user, and it is called in loginpage.html*/
	
	$newArray=$_REQUEST['newArray'];				//get new JSON array from the POST request (has all users including the new one)	
	
	$str = file_get_contents('yogaPlayers.json');	//get the content of the json file
	$json = json_decode($str, true);				//decode the json into an associative array
	$json = $newArray;								//update JSON file with the new array
	file_put_contents('yogaPlayers.json', $json);	//put the data back into the JSON file
?>
