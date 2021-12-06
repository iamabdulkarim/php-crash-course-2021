<?php

// // Create array
// $names = ["karim","Noman","Bakkar"];
// // Print the whole array
// echo '<pre>';
// var_dump($names);
// echo '</pre>';

// // Get element by index
// echo $names[2].'<br>';
// echo $names[1].'<br>';
// echo $names[0].'<br>';
// // Set element by index
// $names[0] = 'Mamshad';
// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';

// // Check if array has element at index 2
// isset($names[2]); //true
// isset($names[4]); //false
// // Append element
// $names[] = 'Riaz';
// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Print the length of the array
// echo count($names).'<br>';
// // Add element at the end of the array
// array_push($names, 'karim');
// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Remove element from the end of the array

// echo array_pop($names);
// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Add element at the beginning of the array
// array_unshift($names , 'Rifat');
// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Remove element from the beginning of the array
// echo array_shift($names);
// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Split the string into an array
// $versityFriends = "miraz,sajib,arafat";
// echo '<pre>';
// echo var_dump(explode(",",$versityFriends));
// echo '</pre>';
// // Combine array elements into string
// echo '<br>';

// echo(implode(",",$names));

// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('noman',$names));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('Bakkar',$names));
// echo '</pre>';
// // Merge two arrays
// $newFriends = ['miraz','alif','sadek'];
// echo '<pre>';
// var_dump([...$names,...$newFriends]);
// echo '</pre>';
// // Sorting of array (Reverse order also)
// echo '<pre>';
// var_dump($newFriends);
// echo '</pre>';
// sort($names);
// echo '<pre>';
// var_dump($names);
// echo '</pre>';

// rsort($newFriends);
// echo '<pre>';
// var_dump($newFriends);
// echo '</pre>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Abdul karim',
    'surname' => 'Bulbul',
    'age' => 27,
    'hobbies' => ['coding','video Gamming','cricket']
];
echo '<pre>';
print_r($person);
var_dump($person);
echo '</pre>';
// Get element by key
echo $person['name'].'<br>';
// Set element by key
$person['channel'] = 'CleaverProgrammer';
echo '<pre>';
var_dump($person);
echo '</pre>';
// Null coalescing assignment operator. Since PHP 7.4
$person['address'] ??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';
// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
// Sorting associative arrays by values, by keys
// ksort($person);//sorting with keys
// echo '<pre>';
// var_dump($person);
// echo '</pre>';
asort($person);//sorting with values
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos = [
    ['title'=> 'Todo title 1', 'completed'=>true],
    ['title'=> 'Todo title 2', 'completed'=>false],
];
echo '<pre>';
var_dump($todos);
echo '</pre>';