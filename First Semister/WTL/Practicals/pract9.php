<?php
$string = "Hello, this is a string example.";

// String length
$length = strlen($string);
echo "Length of the string: $length <br>";

// Convert to lowercase
$lowercase = strtolower($string);
echo "Lowercase: $lowercase <br>";

// Convert to uppercase
$uppercase = strtoupper($string);
echo "Uppercase: $uppercase <br>";

// Substring extraction
$substring = substr($string, 7, 5); // Extracts 'this '
echo "Substring: $substring <br>";

// String search
$search = "string";
if (strpos($string, $search) !== false) {
    echo "The word '$search' is found in the string. <br>";
} else {
    echo "The word '$search' is not found in the string. <br>";
}

// String replace
$replace = str_replace("is", "was", $string);
echo "Replacing 'is' with 'was': $replace <br>";

// String repetition
$repeatedString = str_repeat($string, 3);
echo "Repeated string: $repeatedString <br>";

// Trim leading and trailing whitespace
$whitespaceString = "   Trim whitespace   ";
$trimmedString = trim($whitespaceString);
echo "Trimmed string: '$trimmedString' <br>";

// Explode string into an array
$phrase = "This is a phrase";
$words = explode(" ", $phrase);
echo "Exploded string into an array: ";
print_r($words);
echo "<br>";

// Implode array into a string
$implodedString = implode(", ", $words);
echo "Imploded array into a string: $implodedString <br>";

// Reverse a string
$reversedString = strrev($string);
echo "Reversed string: $reversedString <br>";

// Check if string starts/ends with a specific substring
if (substr($string, 0, 5) === "Hello") {
    echo "String starts with 'Hello'. <br>";
}

if (substr($string, -8) === "example.") {
    echo "String ends with 'example.'. <br>";
}

// Character count
$charCount = count_chars($string, 1);
echo "Character count: <br>";
foreach ($charCount as $char => $count) {
    echo "Character '$char' appears $count times. <br>";
}

// HTML Special Characters
$htmlString = '<p>This is a paragraph.</p>';
$encodedString = htmlspecialchars($htmlString);
echo "Encoded HTML entities: $encodedString <br>";

// Compare strings
$string1 = "Hello";
$string2 = "hello";
$comparison = strcmp($string1, $string2);
if ($comparison === 0) {
    echo "The strings are equal. <br>";
} elseif ($comparison > 0) {
    echo "'$string1' is greater than '$string2'. <br>";
} else {
    echo "'$string1' is less than '$string2'. <br>";
}
?>
