<?php

declare(strict_types=1);

function sum(array $numbers) : float {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }

    return $sum;
}

var_dump(sum([2, 3, 4, 5, 6]));

// var_dump(
//     sum([2, 3, 4, 5, 6]),
//     sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
//     sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
// );