<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$myName = "karim";
$myAge = 28;
$isMale = true; // Change into false
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $myName . '<br>';
echo $myAge . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($myName) . '<br>';
echo gettype($myAge) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($myName, $myAge, $isMale, $height, $salary);

// Change the value of the variable
$myName = false;

// Print type of the variable
echo gettype($myName) . '<br>';

// Variable checking functions
is_string($myName); // false
is_int($myAge); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
var_dump(isset($myName));
var_dump(isset($myName2));
echo '<br>';

// Constants
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// 12. Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';