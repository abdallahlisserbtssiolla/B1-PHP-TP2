<?php

define( "TVA" , 19,6 ) ;

echo "Saisir le prix Hors Taxe d'une traversée : " ; 

$prixHT = fgets(rtrim(STDIN)) ; 

$prixTTC(TVA*$prixHT)/100 + $prixHT   ; 

echo "Prix TTC : " , $prixTTC , "\n" ; 


?>
