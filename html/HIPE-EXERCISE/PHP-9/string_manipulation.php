<?php 

$string_one = "This is string number one.";
$string_two = "This is string number two!";

echo "Concatenation: " . "<br>" . $string_one . " " . $string_two . "<br><br>"; // concatenation
echo "Substring: " . "<br>" . substr($string_one, 7, 10) . "<br><br>"; // substring
echo "Reverse: " . "<br>" . strrev($string_one) .  "<br><br>"; // reverse the string
echo "Replacement: " . "<br>" . str_replace("two!", "eleven!", $string_one) . "<br><br>"; // replacement

// case conversion
$upper_string = strtoupper($string_one); // convert to uppercase
echo "To uppercase: " . "<br>" . $upper_string . "<br><br>";
$lower_string= strtolower($upper_string); // convert to lowercase
echo "To lowercase: " . "<br>" . $lower_string . "<br><br>";
echo "First letter uppercase: " . "<br>" . ucfirst($lower_string) . "<br><br>"; // convert the first letter to uppercase

echo "String padding: " . "<br>" . str_pad($string_two, 30, "!", STR_PAD_RIGHT) . "<br><br>"; // string padding
echo "String length: " . "<br>" . strlen($string_two) . "<br><br>"; // string length
echo "String search: " . "<br>" . strpos($string_two, "number"); // string search