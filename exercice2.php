<?php
function decroissance ($n){
    if ($n > 0){
        print nl2br ("$n\n");
        decroissance ($n - 1);
    }
}
decroissance (10);
?>