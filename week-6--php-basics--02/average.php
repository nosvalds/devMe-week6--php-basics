<?php

declare(strict_types=1);

function average(array $values) : float {
    $sum = 0;

    foreach ($values as $value) {
        $sum += $value;
    }
        
    return $sum / count($values);
}


var_dump(
    average([2, 3, 4, 5, 6]), // float(4)
    average([2, 3]), // float(2.5)
    average([10, 30]), // float(20)
    average([-4, -8, -9]), // float(-7)
);