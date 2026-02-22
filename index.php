<?php



$users = [
	['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'Uomo'],
	['name' => 'Marta', 'surname' => 'Rossi', 'gender' => 'Donna'],
	['name' => 'Roberto', 'surname' => 'Girelli', 'gender' => 'NB'],
	['name' => 'Ludovica', 'surname' => 'Vento', 'gender' => 'Donna'],
	['name' => 'Massimo', 'surname' => 'Lorenzi', 'gender' => 'NB'],
	['name' => 'Federica', 'surname' => 'Anelli', 'gender' => 'Donna'],
	['name' => 'Pietro', 'surname' => 'Caglio', 'gender' => 'Uomo']
];



foreach ($users as $user) {
	
	if($user['gender'] === 'Uomo') {
		
		echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";

	} elseif ($user['gender'] === 'Donna') {
		
		echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";

	} elseif ($user['gender'] === 'NB') {

		echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
	}
}


?>