<?php
// Example PHP code to demonstrate conditional logic and variable assignment

$studentName = "John Doe";
$mathGrade = 85;

if ($mathGrade >= 90) {
    $grade = "A";
} else if ($mathGrade >= 75) {
    $grade = "B";
} else if ($mathGrade >= 60) {
    $grade = "C";
}

echo "Student's name is {$studentName}, their math grade is {$grade}.";

// Example of handling missing values
if (!isset($studentName)) {
    echo "The student's name was not provided.";
}
