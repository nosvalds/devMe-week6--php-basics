<?php

declare(strict_types=1);

function timesBy(array $numbers, float $multiplier) : array {
    foreach ($numbers as $number) {
        $result[] = $number * $multiplier;
    }

    return $result;
}
// … your function here

var_dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);