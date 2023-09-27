<?php
echo "Entrez le nom du port de départ : ";
$portDepart = rtrim(fgets( STDIN));

echo "Entrez le nom du port d'arrivée : ";
$portArrivee =  rtrim(fgets( STDIN));

echo "Port de départ : " . $portDepart . "\n";
echo "Port d'arrivée : " . $portArrivee . "\n";


echo "Après permutation :\n";
echo "Port de départ : " , $portDepart , "\n";
echo "Port d'arrivée : " , $portArrivee , "\n";
?>
