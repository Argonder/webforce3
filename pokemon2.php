<!DOCTYPE html>
<html>
<head>
	<title>Pokemon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form>  
<fieldset>
<div>Point de vie <input type="test" name="pv_pikachu" value="<?php echo isset($_GET['pv_pikachu']) ? $_GET['pv_pikachu'] : ''; ?>"/></div>
<div>Point de defense <input type="test" name="defense_pikachu" value="<?php echo isset($_GET['defense_pikachu']) ? $_GET['defense_pikachu'] : ''; ?>"/></div>
<div>Point d\'attaque <input type="test" name="attaque_pikachu" value="<?php echo isset($_GET['attaque_pikachu']) ? $_GET['attaque_pikachu'] : ''; ?>"/></div>
</fieldset>
<fieldset>
	<div>Point de vie <input type="test" name="pv_bulbizarre" value="<?php echo isset($_GET['pv_bulbizarre']) ? $_GET['pv_bulbizarre'] : ''; ?>"/></div>
<div>Point de defense <input type="test" name="defense_bulbizarre" value="<?php echo isset($_GET['defense_bulbizarre']) ? $_GET['defense_bulbizarre'] : ''; ?>"/></div>
<div>Point d\'attaque <input type="test" name="attaque_bulbizarre" value="<?php echo isset($_GET['attaque_bulbizarre']) ? $_GET['attaque_bulbizarre'] : ''; ?>"/></div>

</fieldset>
<button type="submit"> Combattez! </button>
</form>





<?php
//tableau de pokemon ainsi que leur attribut

//information du form

echo"<pre>";
var_dump($_GET);
var_dump($_POST);
echo"</pre>";

$pokemons = array(
	'pokemon' => [
	  'nom' => 'pikachu',
	  'pv' => isset($_GET['pv_pikachu']) ? $_GET['pv_pikachu'] : 25,
	  'defense' => isset($_GET['defense_pikachu']) ? $_GET['defense_pikachu'] : 10,
	  'attaque' => isset($_GET['attaque_pikachu']) ? $_GET['attaque_pikachu'] : 15,

	],

	'pokemon2' => [
		'nom' => 'bulbizarre' ,
		'pv' => isset($_GET['pv_bulbizarre']) ? $_GET['pv_bulbizarre'] : 30,
		'defense' => isset($_GET['defense_bulbizarre']) ? $_GET['defense_bulbizarre'] : 20,
		'attaque' => isset($_GET['attaque_bulbizarre']) ? $_GET['attaque_bulbizarre'] : 8,

	],
	'pokemon3' => [
		'nom' => 'salameche',
		'pv' => 40,
		'defense' => 15,
		'attaque' => 50,
	],
	'pokemon4' => [
		'nom' => 'carapuce',
		'pv' => 40,
		'defense' => 50,
		'attaque' => 15, 

		],

);

foreach($pokemons as $pokemon) {
	echo 'nom : ' .$pokemon['nom'].'<br/>';
	echo 'pv : ' .$pokemon['pv'].'<br/>';
	echo 'defense :' .$pokemon['defense'].'<br/>';
	echo 'attaque : ' .$pokemon['attaque'].'<br/>';
	echo '<br/>';
}
?>



<?php
/**
 * Bienvenue dans ce module PHP
 * Nous allons travailler à la réalisation d'un pokedex
 */
// Pikachu
$attaque_pikachu = 15;
$defense_pikachu = 10;
$pv_pikachu = 25;
// Bulbizarre
$attaque_bulbizarre = 8;
$defense_bulbizarre = 20;
$pv_bulbizarre = 30;

$tour = 0;
echo "Date : " . date('d/m/Y : H:i:s');
do {

	echo"<h2> Tour : " . ++$tour ." à ". date('H:i:s') . "</h2>";


// pikachu attaque bulbizarre
echo "<p>Pikachu attaque bulbizarre</p>";
if ($pokemons['pokemon']['attaque'] >= $pokemons['pokemon2']['defense']) {
  // L'attaque est supérieure à la défense : pikachu touche
  $coup = $pokemons['pokemon']['attaque'] - $pokemons['pokemon2']['defense'] + 1; // La valeur du coup est la différence entre l'attaque et la défense
  $pokemons['pokemon2']['pv'] -= $coup;
  echo "<p>Bulbizarre perd $coup PV, il lui reste " .$pokemons['pokemon2']['pv']. " PV</p>";
} else {
  // La défense est supérieure à l'attaque, pikachu prend la moitié du coup et la défense baisse un peu
  $coup = ($pokemons['pokemon2']['defense'] - $pokemons['pokemon']['attaque']) / 2;
  $pokemons['pokemon']['pv'] -= $coup;
  $pokemons['pokemon2']['defense'] -= 1;
  echo "<p>Bulbizarre perd 1 Points de défense, il lui reste <span>".$pokemons['pokemon2']['defense']." Points de défense</span></p>";
  echo "<p>Pikachu râte son attaque ! Il perd $coup Points de vie, il lui reste ".$pokemons['pokemon']['pv']." Points de vie</p>";
}
if ($pokemons['pokemon2']['pv'] <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if
  echo "<p>Bulbizarre est KO !</p>";
if ($pokemons['pokemon']['pv'] <= 0)
  echo "<p>Pikachu est KO !</p>";
// Et maintenant la contre-attaque : à vous de jouer !
// bulbizarre attaque pikachu
echo "<p>Bulbizarre attaque Pikachu</p>";
if ($pokemons['pokemon2']['attaque'] >= $pokemons['pokemon']['defense']) {
  // L'attaque est supérieure à la défense : bulbizarre touche
  $coup = $pokemons['pokemon2']['attaque'] - $pokemons['pokemon']['defense'] + 1; // La valeur du coup est la différence entre l'attaque et la défense
  $pokemons['pokemon']['pv'] -= $coup;
  echo "<p>Pikachu perd $coup PV, il lui reste ".$pokemons['pokemon']['pv']." PV</p>";
} else {
  // La défense est supérieure à l'attaque, bulbizarre prend la moitié du coup et la défense baisse un peu
  $coup = ($pokemons['pokemon']['defense'] - $pokemons['pokemon2']['attaque']) / 2;
  $pokemons['pokemon2']['pv'] -= $coup;
  $pokemons['pokemon']['defense'] -= 1;
  echo "<p>Pikachu perd 1 Points de défense, il lui reste ".$pokemons['pokemon']['defense']." Points de défense</p>";
  echo "<p>Bulbizarre râte son attaque ! Il perd $coup Points de vie, il lui reste ".$pokemons['pokemon2']['pv']." Points de vie</p>";
}
if ($pokemons['pokemon2']['pv'] <= 0) // S'il n'y a pas d'accolades après un if, seule la première instruction est filtrée par le if
  echo "<p>Bulbizarre est KO !</p>";
if ($pokemons['pokemon']['pv'] <= 0)
  echo "<p>Pikachu est nul !</p>";

 sleep(0.25);
}while($pokemons['pokemon']['pv'] > 0 && $pokemons['pokemon2']['pv'] > 0) ;

// Ajoutons quelques baies pour restaurer des Points de Vies
$pv_baie_rouge = 50;
$pv_baie_noire = 30;
// Bulbizarre mange une baie rouge
// Pikachu mange une baie noire























?>

</body>
</html>