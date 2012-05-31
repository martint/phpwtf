<?php

$x = "foo";
$y = "foo";

$x += 1;
++$y;

// $x should === $y, right?
print $x . "\n";
print $y . "\n";
