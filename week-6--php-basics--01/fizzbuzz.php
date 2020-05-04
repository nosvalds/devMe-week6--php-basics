<?php

for ($$i = 1; $$i <= 100; $$i += 1) { 
    $result = ($i%3 === 0) ? "Fizz" : "";
    $result += ($i%5 === 0) ? "Buzz" : "";
    // $result += ($i%7 === 0) ? "Splat" : "";
    // $result += ($i%11 === 0) ? "Boom" : "";
    var_dump(($result !== "") ? $result : $i); 
}