<?php
for ($ligne = 1; $ligne <= 10; $ligne++){
    for ($etoile = 1; $etoile <= $ligne; $etoile++){
        echo "*";
    }
    echo nl2br("\n");
}
?>