<?php

$a = null;
$b = -1;

// this is true
var_dump($a < $b);

// so this should also be true, right?
var_dump(($a + 1) < ($b + 1));

