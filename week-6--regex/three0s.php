<?php

declare(strict_types=1);

// [oO]{3,}

var_dump(threeOs("Hello")); // bool(false)
var_dump(threeOs("Helloo")); // bool(false)
var_dump(threeOs("Hellooo")); // bool(true)
var_dump(threeOs("HelloOoOo")); // bool(true)