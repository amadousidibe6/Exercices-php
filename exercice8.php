<?php
function factorielle($nombre){
if ($nombre <= 1){
    return 1;
}
else{
    return $nombre * factorielle ($nombre - 1);
}
}
$nombre = 3;
$factorise = factorielle($nombre);
echo "la factorielle de $nombre est $factorise"
?>