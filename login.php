<?php

$quai_antique = new PDO('mysql:host=localhost;dbname=quai_antique', "root", "");

session_name("Quai");
session_start();

try {
	$row = $quai_antique->query("SELECT * FROM User WHERE Id LIKE {$_POST['Id']}");
	$user = $row->fetch();
	if ($user["Mdp"] == $_POST['Mdp']) {
		$_SESSION['user_prenom'] = $user["Prenom"];
		$_SESSION['user_nom'] = $user["Nom"];
		$_SESSION['id'] = $user["Id"];
		$_SESSION['user_type'] = $user["Type"];
	}
	else {
		http_response_code(403);
	}
}
catch(Exception $e){
	http_response_code(403);
}
exit;