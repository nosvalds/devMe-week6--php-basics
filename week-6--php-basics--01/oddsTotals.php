<?php

$total = 0;

for ($i = 0; $i <= 50; $i += 1) { 
    if ($i % 2 !== 0) {
        $total += $i;
        var_dump($total);
    }
}