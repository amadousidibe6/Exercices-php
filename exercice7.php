<?php
$nombre = 3;
$fact = 1;
for ($i = 1; $i <= $nombre; $i++){
    $fact = $fact * $i;
}
echo "la factorielle de" . " " . $nombre . " " . "est" . " " . $fact; 
?>