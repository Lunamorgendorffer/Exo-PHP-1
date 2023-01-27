<h4>Exercice 1</h4><br>
<?php

$phrase = "Notre formation DL commence aujourd'hui";
echo "La phrase '".$phrase."' contient ".strlen($phrase)." caracteres.<br>";

?>

<h4>Exercice 2</h4><br>
<?php

$phrase = "Notre formation DL commence aujourd’hui";
echo "La phrase '".$phrase."' contient ".str_word_count($phrase)." mots.<br>";

?>

<h4>Exercice 3</h4><br>
<?php

$phrase = "Notre formation DL commence aujourd’hui <br>";
$nouvellePhrase = str_replace("aujourd’hui", "demain", $phrase);

echo $phrase;
echo $nouvellePhrase;
?>

<h4>Exercice 4</h4><br>
<?php

$phrase = "Engage le jeu que je le gagne";

// On supprimer les espaces "str-replace" et met tous les caractères en minuscule "strlower"
$phrase = str_replace(" ", "", $phrase);
$phrase = strtolower($phrase);

// On inverser la chaîne de caractères avec "strrev"
$phrase_inverse = strrev($phrase);

/* On compare la phrase initial et sa version inverse. 
Si elles sont égales, alors cela signifie que la phrase est un palindrome*/
if ($phrase == $phrase_inverse) {
    echo "La phrase ".$phrase."est un palindrome."."<br>";
} else {
    echo "La phrase '".$phrase."'n'est pas un palindrome\n";
}
?>

<h4>Exercice 5</h4><br>
<?php

$montant_en_francs = 100;
$montant= 15.24;

$taux_de_conversion = $montant/$montant_en_francs;
$montant_en_euros= round ($montant_en_francs*$taux_de_conversion,2);

echo "montant en francs: ".$montant_en_francs."<br>";
echo $montant_en_francs."francs = ".$montant_en_euros."€."."<br>";
?>

<h4>Exercice 6</h4><br>
<?php

$prix_unitaire = 9.99;
$quantite = 5;
$taux_tva = 0.2;

// On calcule le montant de la TVA
$montant_tva = $prix_unitaire * $quantite * $taux_tva;

// On calcule du montant total de la facture
$montant_facture = $prix_unitaire * $quantite + $montant_tva;

echo "Prix unitaire de l'article : " . $prix_unitaire . " €"."<br>";
echo "Quantité : " . $quantite."<br>";
echo "Taux de TVA : " . $taux_tva."<br>";
echo "Le montant de la facture à régler est de : " . $montant_facture . " €"."<br>";

?>

<h4>Exercice 7</h4><br>
<?php

$age = 10;

// on détermine  la catégorie de l'enfant
if ($age >= 6 && $age <= 7) {
  $categorie = "Poussin";
} elseif ($age >= 8 && $age <= 9) {
  $categorie = "Pupille";
} elseif ($age >= 10 && $age <= 11) {
  $categorie = "Minime";
} elseif ($age >= 12) {
  $categorie = "Cadet";
} else {
  $categorie = "La catégorie de l'enfant n'est pas gérée";
}

echo "L'enfant qui a " . $age . " ans appartient à la catégorie « " . $categorie . " »"."<br>";

?>

<h4>Exercice 8</h4><br>
<?php

// Déclaration de la variable contenant le nombre pour lequel on souhaite afficher la table de multiplication
$nombre = 8;

// Affichage de l'en-tête
echo "Table de " . $nombre . " :"."<br>";

// Initialisation de la variable de compteur
$i = 1;

// Boucle while qui s'exécute tant que la variable de compteur est inférieure ou égale à 3
while ($i <= 3) {
  // Calcul et affichage de la multiplication
  echo "\n" . $i . " x " . $nombre . " = " . $i * $nombre."<br>";
  
  // Incrémentation de la variable de compteur
  $i++;
}
?>

<?php

// Déclaration de la variable contenant le nombre pour lequel on souhaite afficher la table de multiplication
$nombre = 8;

// Affichage de l'en-tête
echo "Table de " . $nombre . " :"."<br>";

// Boucle for qui parcourt les entiers de 1 à 3
for ($i = 1; $i <= 3; $i++) {
  // Calcul et affichage de la multiplication
  echo "\n" . $i . " x " . $nombre . " = " . $i * $nombre."<br>";
}
?>

<h4>Exercice 9</h4><br>
<?php

$age = 32;
$sexe = "F";

// Test des conditions pour savoir si la personne est imposable
if (($sexe == "F" && $age >= 18 && $age <= 35) || ($sexe == "M" && $age > 20)) {
  $imposable = true;
} else {
  $imposable = false;
}

// Affichage du résultat
echo "Age : " . $age."<br>";
echo "Sexe : " . $sexe."<br>";
if ($imposable) {
  echo "La personne est imposable."."<br>";
} else {
  echo "La personne n'est pas imposable."."<br>";
}

?>

<?php
echo "<h4>Exercice 10</h4><br>";

$montant_a_payer = 152;
$montant_verse = 200;
$reste_a_payer = 48;
$nb10 = 0;
$nb5 = 0;
$nb2= 0;
$nb1=0;

while ($reste_a_payer >= 10) {
  if($reste_a_payer >= 10){
  $reste_a_payer = $reste_a_payer - 10;
  $nb10++;
  }elseif ($reste_a_payer >= 5){
  $reste_a_payer = $reste_a_payer - 5;
  $nb5++;
  }elseif ($reste_a_payer >= 2){
  $reste_a_payer = $reste_a_payer - 2;
  $nb2++;
  }
}

if($nb10 >= 0){
  echo "rendu de monnaie: ". $nb10." billet de 10 .<br>";
}elseif($nb5 >= 0){
  echo "rendu de monnaie: ". $nb5." billet de 5 .<br>";
}elseif ($nb2 >= 0) {
  echo "rendu de monnaie: ". $nb2." pièce de 2.<br>";
}else{
  echo "rendu de monnaie: ". $nb1." pièce de 1 .<br>";
}
?>

<?php
echo "<h4>Exercice 11</h4><br>";

$marques = ["Peugeot", "Renault", "BNW", "Mercedes"];
$nbMarques = count($marques);

echo " <h5>il y a 4 marques de voitures dans le tableau:</h5><br>";
for ($i= 0; $i < $nbMarques; $i++) {
  echo $marques [$i]. "<br>";

}

echo "<h5>Methode foreach</h5><br>";
foreach ( $marques as $marque ){
  echo $marque. "<br>";
}

?>

<h4>Exercice 12</h4><br>
<?php

function direBonjour($prenom,$langue){
  switch($langue){
    case 'FRA':
      echo "Salut " .$prenom. "<br>";
    break;
    case 'ESP':
      echo "Hola " .$prenom. "<br>";
    break;
    case 'ENG':
      echo "Hello " .$prenom. "<br>";
    break;
    default:
      echo "Langue non geré <br>";
  }
}
$personnes=[ "Mickael" => "FRA", "Virgile" => "ESP", "Marie-claire"=> "ENG" ];

ksort($personnes);

foreach($personnes as $prenoms => $langue) {
  direBonjour($prenoms, $langue);
}
?>

<h4>Exercice 13</h4><br>
<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count ($notes);
$sommesNotes = array_sum($notes);
$moyenne= round($sommesNotes/$nbNotes,2);

echo "Les notes obtenues par l’élève sont: ";
foreach($notes as $note){
  echo $note;
}
echo "<br>";
echo "Sa moyenne general est donc de:  $moyenne <br>";
?>

<h4>Exercice 14</h4><br>
<?php

$dob ="17.01.1985";
$aujourdhui= date("2018-05-21");
$diff = date_diff(date_create ($dob),date_create ($aujourdhui));

printf('Age de la personne : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);

?>


<h4>Exercice 15</h4><br>
<?php
class Personne{

  private string $_nom;
  private string $_prenom; 
  private DateTime $_dateNaissance;
  
  public function __construct($nom, $prenom, $dateNaissance){
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_dateNaissance = new DateTime($dateNaissance);
  }

  public function get_nom(){
    return $this->_nom;
  }

  public function set_nom($_nom){
    $this->_nom = $_nom;
  }


  public function get_prenom() {
    return $this->_prenom;
  }

  public function set_prenom($_prenom) {
    $this->_prenom = $_prenom;
  }

  
  public function get_dateNaissance() {
    return $this->_dateNaissance;
  }

  public function set_dateNaissance($_dateNaissance) {
    $this->_dateNaissance = $_dateNaissance;
  }


  public function CalculerAge (){
    $dateNaissance =  $this->_dateNaissance;
    $aujourdhui=  new DateTime();
    $interval = $dateNaissance->diff($aujourdhui);
    $elapsed = $interval->format('%y');
    return $elapsed;
  }

  public function __toString() {
    return $this->_nom;
    return $this->_prenom;
    return $this->_dateNaissance;
  }
} 

$p1= new Personne ("DUPONT", "Michel", "1980-02-19");
$p2= new Personne ("DUCHEMIN", "Alice", "1985-01-17");
// var_dump($p1);
echo $p1->get_prenom()." ".$p1->get_nom()." a ".$p1->calculerAge()."  ans <br>";
echo $p2->get_prenom()." ".$p2->get_nom()." a ".$p2->calculerAge()."  ans <br>";
?>
