<?php 
$recupBoiss = $_POST['Boisson'];

$recupSucre = $_POST['Sucres'];
$Eau = "dose Eau";
$Cafe = "dose Café";
$The = "dose thé";

	function prepareBoisson($nomBoisson,$nbSucre){
			switch($nomBoisson) {
				case "expresso";
					return expresso($nbSucre);
				case "cafeLong";
					return cafeLong($nbSucre);
				case "the";
					return the($nbSucre);
				default;
					return "aucune boisson selectionné.";
			}
	}
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
echo prepareBoisson($recupBoiss,$recupSucre);
?>