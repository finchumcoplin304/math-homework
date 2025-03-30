<?php
// This is an example of a PHP code snippet.
// It's not meant to be executed directly but rather as part of your homework assignment or solution process.
// Feel free to modify and extend this code according to your needs.

// Example: Simple calculation (addition, subtraction, multiplication, division)
echo "10 + 5 = " . 10 + 5;

// Example: String concatenation
echo "Hello, $message";

// Example: Looping through arrays
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
    echo $fruit;
}

// Example: File operations (read and write)
$file_path = 'data.txt';
if (!file_exists($file_path)) {
    file_put_contents($file_path, "Data to be written");
} else {
    $content = file_get_contents($file_path);
    echo "File already exists";
}
?>
