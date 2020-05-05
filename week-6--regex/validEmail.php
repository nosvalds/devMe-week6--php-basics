<?php

declare(strict_types=1);

function validEmail(string $str) : bool {
    $str = preg_replace("/(^\s)|(\s$)/", "", $str); // remove beginning and ending spaces
    return filter_var($str, FILTER_VALIDATE_EMAIL) === $str; // validate email
}

var_dump(validEmail(" blahf   ")); // bool(false)
var_dump(validEmail(" blah@f")); // bool(false)
var_dump(validEmail("blah@ fish.horse")); // bool(false)
var_dump(validEmail(" blah@fish.horse")); // bool(true)
var_dump(validEmail("blah@fish.horse ")); // bool(true)
var_dump(validEmail(" blah@fish.horse ")); // bool(true)