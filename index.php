<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
</head>
<body>

<?php 
	$mois=array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
	/* $mois=["janvier",
			  "février",
			  "mars",
			  "avril",
			  "mai",
			  "juin",
			  "juillet",
			  "aout",
			  "septembre",
			  "octobre",
			  "novembre",
			  "décembre"] */

	//	echo($mois[2]);
	//	echo($mois[5]);
	$mois[7]="août";

	for($i=0; $i < count($mois);$i++){
	//	if($i==2||$i==5){
	//		print($mois[$i]."<br/>");
	//	}
		print($mois[$i]."<br/>");
	}

	print("<br/>");

	$hautDeFrance=array("02"=>"Aisne","59"=>"Nord","60"=>"Oise","62"=>"Pas-De-Calais","80"=>"Somme");
	/*$hautDeFrance=["02"=>"Aisne",
					 "59"=>"Nord",
					 "60"=>"Oise",
					 "62"=>"Pas-De-Calais",
					 "80"=>"Somme"]; */
	//	echo($hautDeFrance["59"]);
	// attention, si on entre en chaîne de caractères le numéro, on l'appelle en chaîne de caractères de préférence.
	//array_push() sert à insérer une valeur à la fin d'un tableau

	$hautDeFrance["51"]="Marne";
	//var_dump(exp); die() << n'exécute pas la suite

	foreach($hautDeFrance as $numero => $departement) {
		print("Le département ".$departement." a le numéro ".$numero.". <br/>");
	}
?>

</body>
</html>