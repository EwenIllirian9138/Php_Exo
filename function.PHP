<?php
$nbSucre = 0;
$Eau = "dose Eau";
$Cafe = "dose Café";
$The = "dose thé";
		function expresso($nbSucre){
			global $Eau;
			global $Cafe;
			$recette = "Expresso "."1 ".$Eau." 1 ".$Cafe;
				if ($nbSucre != 0){
					$recette = "Expresso "."1 ".$Eau." 1 ".$Cafe." ".$nbSucre." sucres";
				}
			return $recette;
		}
		function cafeLong($nbSucre){
			global $Eau;
			global $Cafe;
			$recette = "Cafe Long "."2 ".$Eau." 2 ".$Cafe;
				if ($nbSucre != 0){
				$recette = "Cafe Long "."2 ".$Eau." 2 ".$Cafe." ".$nbSucre." sucres";
				}
			return $recette;
		}
		function the($nbSucre){
			global $Eau;
			global $The;
			$recette = "Thé "."1 ".$Eau." 1 ".$The;
				if ($nbSucre != 0){
				$recette = "Thé "."1 ".$Eau." 1 ".$The." ".$nbSucre." sucres";
				}
			return $recette;
		}
		function prepareBoisson($nomBoisson,$nbSucre){
			switch($nomBoisson) {
				case "ex^ressp";
					echo expresso($nbSucre);
				case "cafeLong";
					echo cafeLong($nbSucre);
				case "The";
					echo the($nbSucre);
				default;
					echo "aucune boisson selectionner.";
			}
		}
/*$recipies = array(expresso($nbSucre),cafeLong($nbSucre),the($nbSucre));

function expresso($nbSucre){
	global $Eau;
	global $Cafe;
	return "Recette expresso :"." 1 ".$Eau." 1 ".$Cafe." ".$nbSucre." sucres"; 
	}

function cafeLong($nbSucre){
	global $Eau;
	global $Cafe;
	return "Recette cafe long :"." 2 ".$Eau." 2 ".$Cafe." ".$nbSucre." sucres";
	}

function the($nbSucre){
	global $Eau;
	global $The;
	return "Recette Thé :"." 2 ".$Eau." 1 ".$The." ".$nbSucre." sucres";
	}


function affichRecipies(){
	global $recipies;
	$tabFinal = "";
		foreach ($recipies as $typeRecipies) {
			$tabFinal .= "<li>".$typeRecipies."</li>";
		}
		return $tabFinal;
	}
*/
?>
