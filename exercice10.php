<?php
$tableau = [];
for ($i=0; $i<10; $i++){
    $tableau [] = rand(5,99);
}
if (in_array(42,$tableau)){
    echo "le nombre 42 figure dans le tableau";
}
else{
    echo "le nombre 42 ne figure pas dans le tableau";
}
var_dump($tableau);
?>