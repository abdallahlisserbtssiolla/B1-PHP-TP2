<?php

define("TVA", 19.6);

echo "Saisir le prix Hors Taxe d'une traversée : ";

$prixHT = rtrim(fgets(STDIN));

$prixTTC = ($prixHT * TVA / 100) + $prixHT;

echo "Prix TTC : ", $prixTTC, "\n";

?>
