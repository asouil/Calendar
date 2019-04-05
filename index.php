<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
</head>
<body>

<?php 
	$mois=array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");

	//	echo($mois[2]);
	//	echo($mois[5]);
	$mois[7]="août";
	for($i=0;$i<count($mois);$i++){
	//	if($i==2||$i==5){
	//		print($mois[$i]."<br/>");
	//	}
		print($mois[$i]."<br/>");
	}

	print("<br/>");

	$hautDeFrance=array("02"=>"Aisne","59"=>"Nord","60"=>"Oise","62"=>"Pas-De-Calais","80"=>"Somme");
//	echo($hautDeFrance[59]);
	$hautDeFrance[51]="Marne";
	foreach($hautDeFrance as $key => $val) {
        print("Le département ".$val." a le numéro ".$key."<br/>");
    }
	
?>

</body>
</html>