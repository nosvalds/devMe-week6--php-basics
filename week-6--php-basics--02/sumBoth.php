<?php

declare(strict_types=1);

function sum(array $numbers) : int {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }

    return $sum;
}

function sumBoth(array $numbers1, array $numbers2) : int {
    return sum($numbers1) + sum($numbers2);
}

var_dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
);