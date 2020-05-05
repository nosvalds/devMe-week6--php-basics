<?php

declare(strict_types=1);

// 
// Spaces - (^\s)|(\s$)
// Emails - [a-z]+@[a-z]+\.[a-z]+
//          \w+@\w+\.\w+

var_dump(validEmail(" blahf   ")); // bool(false)
var_dump(validEmail(" blah@f")); // bool(false)
var_dump(validEmail("blah@ fish.horse")); // bool(false)
var_dump(validEmail(" blah@fish.horse")); // bool(true)
var_dump(validEmail("blah@fish.horse ")); // bool(true)
var_dump(validEmail(" blah@fish.horse ")); // bool(true)