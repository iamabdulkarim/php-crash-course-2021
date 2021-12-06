<?php

// Create array
$names = ["karim","noman","Bakkar"];
// Print the whole array
echo '<pre>';
var_dump($names);
echo '</pre>';

// Get element by index
echo $names[2].'<br>';
echo $names[1].'<br>';
echo $names[0].'<br>';
// Set element by index
$names[0] = 'Mamshad';
echo '<pre>';
echo var_dump($names);
echo '</pre>';

// Check if array has element at index 2
isset($names[2]); //true
isset($names[4]); //false
// Append element
$names[] = 'Riaz';
echo '<pre>';
echo var_dump($names);
echo '</pre>';
// Print the length of the array
// echo count($names).'<br>';
// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array

// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays