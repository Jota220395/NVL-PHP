<?php
$string=fopen("fecha.txt","r+");
$modificado=fopen("modificado.txt", "r+");


function copia_fichero($string)
{
copy($string, $modificado."/");
}




?>