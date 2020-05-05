<?php

declare(strict_types=1);

// … your function here

var_dump(mi5("007")); // bool(true)
var_dump(mi5("oo8")); // bool(false)
var_dump(mi5("003")); // bool(true)
var_dump(mi5("M")); // bool(false)