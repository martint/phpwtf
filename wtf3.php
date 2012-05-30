<?php

$a = array("x" => "foo");
$b = (object) $a;

class bool {}
$c = (bool) $a; // doesn't do what you think

var_dump($a);
var_dump($b);
var_dump($c);
