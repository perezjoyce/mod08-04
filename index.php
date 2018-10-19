<form action="index.php" method="post">
	<input type="text" name="pokemon">
	<input type="submit">
</form>

<?php 

// UNLIKE JS, PHP ARRAYS CAN BE LOOSE/HETEROGENOUS
// $diff = ["tuitt", 5, true, 17.5];
// 	foreach ($diff as $indiv) {
// 		echo $indiv . "<br>";
// }








// ASSOCIATIVE ARRAYS
	$type = [

		"Pikachu" => "electric",
		"Charmander" => "fire",
		"Squirtle" => "water",
		"Bulbasaur" => "earth>"
	];


// 	echo $type["Pikachu"];					// electric
	 
// 	SORT FUNCTIONS FOR ARRAYS
// 	sort($type);
// 	rsort($type);


// 	FOREACH METHOD
// 	foreach ($type as $key => $value) {			// displays all keys & value
// 	 		echo "$key is $value type of Pokemon. <br>";
// 		};

// 	SHORTHAND FOR FOREACH: hide keys display value only for security.
// 		foreach ($type as $t) {
// 			echo "$t <br>";
// 		}


	
//MULTIDIMENSIONAL ARRAY WITH NESTED INDEX ARRAY
// $team_ironman = ["Tony", "War Machine", "Vision"];
// $team_cap = ["Captain America", "Bucky", "Hawkeye", "Falcon"];
// $civil_war = [$team_ironman, $team_cap];

	// echo $civil_war [0][0] . "<br>";		// Tony
	// echo $civil_war [1][2] . "<br>";		// Hawkeye

	//DISPLAY INDEXED NESTED ARRAY via NESTED FOR-LOOP
	// for($i=0; $i < count($civil_war) ; $i++) {				// ROW
	// 	for($j=0; $j < count($civil_war[$i]); $j++){		// COLUMN
	// 		echo $civil_war[$i][$j] . ", ";
	// 	}		
	// 	echo "<br>";
	// }

	// echo "<br><br>";

	//DISPLAY NESTED ASSOCIATIVE ARRAY via NESTED FOR-LOOP
	// $team_ironman4 = ["Tony", "War Machine", "Vision"];
	// $team_cap4 = ["Captain America", "Bucky", "Hawkeye", "Falcon"];
	// $civil_war4 = ["Team Ironman" => $team_ironman, "Team CA" => $team_cap];

	// ksort($civil_war4);											// SORT ACCORDING TO KEYS
	// foreach($civil_war4 as $team => $hero) {
	// 	echo "$team : ";
	// 	for($j=0; $j < count($civil_war4[$team]); $j++){		// $j coz nested values are in index form, not associative
	// 		echo $civil_war4[$team][$j] . ", ";					
	// 	}
	// 	echo "<br>";
	// }









// MULTIDIMENSION WITH NESTED ASSOCIATIVE ARRAY
// $team_ironman2 = ["Tony", "War Machine", "Vision"];					
// $team_cap2 = ["Captain America", "Bucky", "Hawkeye", "Falcon"];		
// $civil_war2 = [$team_ironman2, $type];				// INDEX AND ASSOCIATIVE ARRAYS

// 	// echo $civil_war2[1]["Pikachu"] . "<br>";		//ELECTRIC

// // Transform index to associtive array
// $civil_war3 = ["uno" => $team_ironman2, 
// 			"dos" => $type
// 			];

	// echo $civil_war3["dos"]["Charmander"] . "<br>";	// FIRE



	
// TRIAL: DISPLAYS PIC
	echo "<hr>";

	$pokemon = [

		"Pikachu" => "<img src='https://upload.wikimedia.org/wikipedia/ro/thumb/8/89/Pikachu.jpg/200px-Pikachu.jpg'>",
		"Charmander" => "<img src='http://cdn.shopify.com/s/files/1/0257/6087/products/Charmander_Single_Front_e55283a2-abd7-4d21-a38c-7ef7b7e053d8.png?v=1523938940'>",
		"Squirtle" => "<img src='https://cdn.bulbagarden.net/upload/thumb/7/79/Squirtle_SSBU.png/200px-Squirtle_SSBU.png'>",
		"Bulbasaur" => "<img src='https://cdn.bulbagarden.net/upload/thumb/6/64/Saur_Bulbasaur.png/200px-Saur_Bulbasaur.png'>"
	];

	echo $type[$_POST["pokemon"]] . $pokemon[$_POST["pokemon"]];





	?>