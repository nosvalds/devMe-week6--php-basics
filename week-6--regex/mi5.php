<?php

declare(strict_types=1);

function mi5(string $str) : bool {
    return preg_match("/00[0-9]/", $str) === 1;
}
// /00[0-9]/

var_dump(mi5("007")); // bool(true)
var_dump(mi5("oo8")); // bool(false)
var_dump(mi5("003")); // bool(true)
var_dump(mi5("M")); // bool(false)