<?php
// This is a simple PHP script to demonstrate basic operations and string manipulation.
$firstNumber = 5;
$secondNumber = 3;

// Addition
$result = $firstNumber + $secondNumber;
echo "The sum of $firstNumber and $secondNumber is: " . $result;

// Subtraction
$result = $firstNumber - $secondNumber;
echo "The difference between $firstNumber and $secondNumber is: " . $result;

// Multiplication
$result = $firstNumber * $secondNumber;
echo "The product of $firstNumber and $secondNumber is: " . $result;

// Division
$result = $firstNumber / $secondNumber;
if ($secondNumber != 0) {
    echo "The result is: " . $result;
} else {
    echo "Error! Division by zero is not allowed.";
}

// Example of string manipulation using substr and str_replace functions.
$myText = "Hello, World!";
$textWithoutSpaces = str_replace(' ', '', $myText);
echo "Original text without spaces: " . $myText;
echo "Text without spaces in new order: " . $textWithoutSpaces;

// Example of a simple if-else statement with ternary operator.
$age = 20;
$canVote = ($age >= 18) ? 'Yes' : 'No';
echo "Can the person vote? " . ($canVote == 'Yes') . " (old: $age)";
?>
