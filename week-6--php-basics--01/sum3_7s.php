<?php

$total = 0;
$count = 0;
$i = 1;

while ($count < 117) { 
    if ($i % 3 === 0 || $i % 7 === 0) {
        $total += $i;
        $count += 1;
    }
    $i += 1;
}

var_dump($total);