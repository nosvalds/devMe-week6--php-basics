<?php

declare(strict_types=1);

// add parameter and return types
function hello(string $name) : string {
    return "hello ".$name;
};

var_dump(hello("alice")); // string(11) "hello alice"
var_dump(hello("bob")); // string(9) "hello bob"