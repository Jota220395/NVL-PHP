<?php
$fd=fopen("el_quijote.txt","r");
while (($contenido = fgets($fd)) == "molino") {
   echo $contenido . "\n";

}


?>