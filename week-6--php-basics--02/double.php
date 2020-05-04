<?php

declare(strict_types=1);

function double(array $numbers) : array {
    foreach ($numbers as $num) {
        $result[] = $num * 2;
    }

    return $result;
}

var_dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);