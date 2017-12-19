<?php 
$recupBoiss = $_POST['Boisson'];
$recupSucre = intval($_POST['Sucres']);
$listOfDrink = array(
					"expresso" => array('cafe' => 1, 'eau' => 1, 'price' => 50),
					"cafeLong" => array('cafe' => 2, 'eau' => 2, 'price' => 60),
					"theLipt" => array('the' => 1, 'eau' => 1, 'price' => 40)
					);

function prepareRecipies($selectBoisson){
	global $listOfDrink;//déclaration global pour le tableau multi dimentionnel associatif
	$gate ="";//declaration de variable pour la recette
	$recette = $listOfDrink[$selectBoisson];
	foreach ($recette as $key => $value) {
		$gate .= $value." ".$key." ";
	}
	return $gate;
}

//fonction d'affichage
function prepareBoisson($selectBoisson,$nbSucre){ 
	echo prepareRecipies($selectBoisson);
	//test et affichage du nombre de sucre
	if($nbSucre == 1){
		echo 'avec '.$nbSucre.' sucre';
	}
	else if ($nbSucre > 1){
		echo 'avec '.$nbSucre.' sucres';
	}
	else if($nbSucre == 0){
		echo 'sans sucre';
	}
}
//fin fonction d'affichage
prepareBoisson($recupBoiss,$recupSucre);

?>