<?php

declare(strict_types=1);

function largest(array $numbers) : int {
    $largest = $numbers[0];
    foreach ($numbers as $number) {
        $largest = $largest > $number ? $largest : $number;
    }

    return $largest;
}

var_dump(
    largest([2, 4, 6, 4, 7, 5]), // int(7)
    largest([-2, 4, 6, 4, 2, -7, 5]), // int(6)
    largest([-2, -4, -4, -7, -5]), // int(-2)
);