<?php
	/*This file adds the score details to the JSON file after a user finishes a game*/
	
	//Get input variables from POST request
	$quiz=$_REQUEST['quiz'];
	$correctAns=$_REQUEST['correctAnswers'];
	$position=$_REQUEST['position'];
	$gamecounter=$_REQUEST['gamecounter'];
	
	//echo $gamecounter;
	
	$str = file_get_contents('yogaPlayers.json');				
	$json = json_decode($str, true);			

	//Using the gamecounter as an index in the gamestats array
	$json[$position]['gamestats'][$gamecounter]['quiz']=$quiz;			
	$json[$position]['gamestats'][$gamecounter]['correctAnswers']=$correctAns;
	$json[$position]['gamestats'][$gamecounter]['date']=date("Y-m-d");
	$json[$position]['gamecounter']+=1;		//update the gamecounter
	$newJson = json_encode($json);
	file_put_contents('yogaPlayers.json', $newJson);			

?>



