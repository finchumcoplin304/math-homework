
<?php
// Random number between 1 and 10
$rand_number = mt_rand(1, 10);
// Random math operation (+, -, x, /)
$operation = array("+", "-", "x", "/")[mt_rand(0, 3)];
// Get the numbers for the equation
for ($i=0; $i<2; $i++) {
    $numbers[$i] = mt_rand(1, 10);
}
// Create the equation
$equation = "$numbers[0] $operation $numbers[1]";
// Solve the equation
if ($operation == "+") {
    $solution = $numbers[0] + $numbers[1];
} else if ($operation == "-") {
    $solution = $numbers[0] - $numbers[1];
} else if ($operation == "x") {
    $solution = $numbers[0] * $numbers[1];
} else if ($operation == "/") {
    $solution = $numbers[0] / $numbers[1];
}
// Display the equation and solution
echo "$equation = $solution";
?>