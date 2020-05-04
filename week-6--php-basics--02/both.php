<?php

declare(strict_types=1);

function both(array $nums1, array $nums2) : array {
    $result = [];

    foreach ($nums1 as $num1) {
        foreach ($nums2 as $num2) {
            if ($num1 === $num2) {
                $result[] = $num1;
            }
        }
    }

    return $result;
}

var_dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);