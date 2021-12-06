<?php

// Create simple variable
$variable = "Hello, I am karim"; // Extract TheCodeholic into variable
$variable2 = 'Hello, I am karim'; // Replace TheCodeholic with variable
echo $variable . '<br>';
echo $variable2 . '<br>';

// variable concatenation
echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// variable functions
$variable = "    Hello World      ";

echo "1 - " . strlen($variable) . '<br>' . PHP_EOL;
echo "2 - " . trim($variable) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($variable) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($variable) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($variable) . '<br>' . PHP_EOL;
echo "6 - " . strrev($variable) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($variable) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($variable) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($variable, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($variable, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($variable, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $variable) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $variable) . '<br>' . PHP_EOL;

$invoice = 100;
$invoice2 = 123456;
echo str_pad($invoice, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoice2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;


// Multiline text and line breaks
$longText = "
  Hello, my name is karim
  I am 27,
  I love my work
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL;

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>karim</b>
  I am <b>27</b>,
  I love my work
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;
