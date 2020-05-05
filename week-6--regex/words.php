<?php

declare(strict_types=1);

// /\w*/
// "/\s*,\s*/" <- Marks example

var_dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
var_dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]