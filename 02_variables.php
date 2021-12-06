<?php

// What is a variable

// Variable types
$name = 'karim';
$age = 28;
$isMale = true;

echo $name.'<br>';
echo $age.'<br>';
// Declare variables
echo $isMale.'<br>';
// Print the variables. Explain what is concatenation

// Print types of the variables
echo gettype($isMale).'<br>';
// Print the whole variable
// var_dump($name, $age, $isMale).'<br>';
// Change the value of the variable

// Print type of the variable

// Variable checking functions
is_string($name).'<br>';
is_int($age).'<br>';
// Check if variable is defined
isset($name);
// Constants
define ('PI', 3.14);
echo PI;
// Using PHP built-in constants
