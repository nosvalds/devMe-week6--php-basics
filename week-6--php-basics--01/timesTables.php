<?php

$mult = 2 * 3;

for ($i = 1; $i <= 15; $i += 1) {
    $line = "";
    for ($j = 1; $j <= 15; $j += 1) {
        $mult = $i * $j;
        $line .= "{$mult}\t";
    }
    echo "{$line}\n";
}