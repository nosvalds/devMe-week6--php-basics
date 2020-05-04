<?php

declare(strict_types=1);

function squares(array $numbers) : array {
    foreach ($numbers as $number) {
        $result[] = $number * $number;
    }
    return $result;
}

var_dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);