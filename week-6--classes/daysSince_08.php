<?php

declare(strict_types=1);

function daysSince(string $date) : int {
    $now = new DateTime(); // get todays date
    $then = new DateTime($date); // convert input to DateTime object
    $result = date_diff($now, $then); // diff them
    return $result->days; // pull out "days" property
}

var_dump(
    daysSince("1984-04-16"), // 13 thousand and something
    daysSince("1989-03-08"),// why not try *your* date of birth?
);