<?php

declare(strict_types=1);

function stone(float $kg) : float {
    return $kg / 6.35;
}

var_dump(
    stone(74), // float(11.65278)
    stone(50), // float(7.8735)
);

