<?php

declare(strict_types=1);

function wow(int $n) : string {
    $middleOs = "";
    
    for ($i = 0; $i < $n; $i += 1) {
        $middleOs .= "o";
    }
    
    return "W{$middleOs}W";
}

var_dump(wow(12)); // string(14) "Woooooooooooow"
var_dump(wow(4)); // string(6) "Woooow"