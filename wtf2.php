<?php

// this sort of makes sense...

const foo = 1;
print foo . "\n";  

const foo = 2; // does nothing because foo is already defined (should throw an error?)
print foo . "\n";


// but then what about this?

print bar . "\n"; // implicit constant. This should be equivalent to {bar = "bar"; print bar}

const bar = 1; // so this should do nothing, per the previous example, right?
print bar . "\n";

