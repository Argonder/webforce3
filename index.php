<!DOCTYPE HTML>
<html>
<head>
	<title>Exemple</title>
</head>
<body>

	<?php
	$nom = 'Cachera';
	$prenom = 'Jr';
	$age = '25';
	echo "Bonjour " . $nom . " " . $prenom . " " . $age ;

	echo "<br/>";

	if ($age >= 18 ) {
		echo "Majeur";

	} elseif($age >= 15) {
		echo "ado";
	} else {
		echo "enfant";
	}

	$age2 = '25';
	echo"<br>";
	echo $age <=> $age2 ;
	echo"<br>";
	echo 1 <=> 2 ;
	echo"<br>";
	echo 2 <=> 1 ; 
	echo"<br>";

	$a=null;
	$c = 5 ;
	$b = 2 ;
	$d;
	echo $a ?? $b ?? $c ??$d ;
	echo"<br>";

	// L'arithmétique :
	$a = 5 ;
	$b = $a + 5 ;
	
	echo "b vaut $b et a vaut $a";

	echo "<br>";
	$b = $a += 5 ;
	echo "b vaut $b et a vaut $a";

	echo "<br>";

	$a++; 
	echo "a vaut $a <br>";

	++$a;
	echo "a vaut $a <br> ";

	echo" avant a vaut " . ++$a;
	echo "apres a vaut " . $a ;
	echo " avant a vaut " . $a ++ ;
	echo "apres a vaut" . $a ;
	echo "<pre>";
	print_r($a);
	echo"</pre>";
	echo"<pre>";
	var_dump($a);
	echo " ce code n'est pas interprété \n\n du tout";
	echo"<pre>";	
	$array = ["couleur" => "rouge" , "taille" => 1.70];
	echo "<pre>";
	var_dump($array);

	?>

</body>
</html>