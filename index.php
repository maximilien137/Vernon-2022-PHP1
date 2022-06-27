<?php



$truc = 20;
echo $truc++;
echo "<br />";
echo ++$truc;
echo "<br />";


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

$jour =  "mardi";
$jourTest = $jour = "mercredi";

echo"<br />";

// Passage par reference
$a = 1;
$b = &$a;
$b = 2;
echo $a;



/* les different types de variables
- string
-integer
-float
-boolean
-NULL
-array
-object
-resource
-Enumerations ou  (enum) (new variable)
*/


echo"<br />";



/*
Operateurs
-addition +
-souscription -
-multiplacation *
division / 
-modulo %
- ** (10 puissance 2 : 10 ** 2)

*/


/*
Operatuers combines
$i = $i + 1;
$i++;
$i += 1;

- == Compare la valeur
-=== compare la valeuret le type
!= ou <>  different en valeur

!== different en valeur et en type
- <
- >
- <=
- >=



*/

/*$x = $x / 4;
$x /= 4;*/

$x = 42;
var_dump($x == "42");

/* Example de verification d'operateur de comaprison avec 
*/

$x = 210;
// if ($x) 
if (isset($x) && is_numeric($x)){

    


} if ($x > 0) {
// Selon PSR-12 : mettre des espaces apres if et elsif
    echo '$x est positif';

} elseif ($x < 0) {
    echo '$x est negatif';
} else {
    echo '$x est nul';
} 

echo"<br />";

/*$var = 0;
                   
// Évaluée à vrai car $var est vide
if (empty($var)) {
  echo '$var vaut soit 0, vide, ou pas définie du tout';
}
                   
// Évaluée à vrai car $var est définie
if (isset($var)) {
  echo '$var est définie même si elle est vide';
}*/

//++, --
