<?php

declare(strict_types=1);

// [0-9-]*

var_dump(phoneNumber("blah")); // bool(false)
var_dump(phoneNumber("12-323-5-344")); // bool(true)
var_dump(phoneNumber("12-34-a334-43")); // bool(false)
var_dump(phoneNumber("--123----23123")); // bool(true)