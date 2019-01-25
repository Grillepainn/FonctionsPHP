<?php
//Exercice 1.1
function affichetext() {
  echo "This is a ransom sentence";
}
affichetext();

//Exercice 1.3
function textaff($msg1, $msg2) {
  return $msg1. ' '.$msg2;
}

$message1 = "Ceci est un message,";
$message2 = " et il est plutôt sympa !";
echo textaff($message1, $message2);

//Exercice 2
function nombre($nbr1, $nbr2) {
  if ($nbr1 < $nbr2) {
    echo "Le premier chiffre est supérieur au second";
  } elseif ($nbr1 > $nbr2) {
    echo "Le second chiffre est supérieur au premier";
  } else echo "Les chiffres sont identiques";
}

$nombre1 = 2;
$nombre2 = 2;
nombre($nombre2, $nombre1);

//Exercice 4.1
 $depensejohn = array(3,5,9,12,10);
 $total = 0;
 for ($i=0; $i < count($depensejohn) ; $i++) {
   $total = $total + $depensejohn[$i];
 }

echo "La somme des dépenses est de ".$total." euros.";

//Exercice 4.2
$array = array(2,8,15,47,23);
function depenses($somme) {
  $total = 0;
  for ($i=0; $i < count($somme) ; $i++) {
    $total = $total + $somme[$i];
  }
  return $total;
}

echo "Les dépenses sont de ".depenses($array)." euros.";
 ?>
