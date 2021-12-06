<?php

$number = 0;
$salary = 300000;

// Sample if
if($number === 20){
    echo ' 1';
}
echo '<br>';
// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if
echo $number < 22 ? 'young' : 'old';
// Short ternary
$myNumber = $number ?: 18;
echo '<pre>';
var_dump($myNumber);
echo '</pre>';
// Null coalescing operator
$newName = isset($name) ? $name :'karim';
$newName = $name ?? 'karim';
// switch
$userRole = 'karim';
switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;

    default:
        echo 'Invalid Role';
    
}