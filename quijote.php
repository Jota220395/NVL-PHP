<?php
$string=fopen("el_quijote.txt","r+");

$cambio = preg_replace("/Sancho/", 'Morty', $string);
echo $cambio;





?>