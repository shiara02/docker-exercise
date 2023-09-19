<?php
$first = 0;
$second = 1;

echo "\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$first ";

    $next = $first + $second;
    $first = $second;
    $second = $next;
}