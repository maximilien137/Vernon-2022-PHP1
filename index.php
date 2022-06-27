<?php

// Afficher une chaine de characters qui contient du HTML
$toto = "<h1>12</h1>";
echo $toto;

// Affichage de  variables

$jour = "lundi";
echo 'Nous sommes ' . $jour . '.';


// Avec guillemet double, la variable est evaluee
echo "Nous sommes $jour";
echo "<br />";
// Avec quillemets simples, la variable nest pas evaluee
echo 'Nous sommes $jour';

echo"<br />";


// Obtenir le type de une variable
echo gettype($jour);

echo"<br />";


// Afficehr des information sur le tyoe de la variable et le contenu
var_dump($jour);

//La fonction print_r() retour un resultat simimaire, mais sans mentionnner le type

/*
Quelque regles/ 
toute variable commencent par le signe $
toutes variabme commencent par une letter ou '_'
le nom d'une variable content, des chiffres des underscore
le nom d'une variable ne contient pas d'espace

*/


