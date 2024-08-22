<?php

// counting vowels in a string
function countVowels($string) {
    // Convert the string to an array of characters
    $chars = str_split(strtolower($string));
    
    // Count the occurrences of each character
    $charCounts = array_count_values($chars);
    
    // List of vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    // Sum the counts of the vowels
    $vowelCount = 0;
    foreach ($vowels as $vowel) {
        if (isset($charCounts[$vowel])) {
            $vowelCount += $charCounts[$vowel];
        }
    }
    
    return $vowelCount;
}


// defining the array
$strings = ["Hello", "World", "PHP", "Programming"];

// iterating over each string
foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    
    $reversedString = strrev($string);
    
    // Printing the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}