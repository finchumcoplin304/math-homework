
<?php
// Random math homework assignment generator

$min = 0;
$max = 100;
$operators = array('+', '-', '*', '/');

$expression = generateExpression($min, $max, $operators);
echo "Math Homework: $expression\n";

function generateExpression($min, $max, $operators) {
    // Generate a random number between the min and max values
    $num1 = rand($min, $max);
    $num2 = rand($min, $max);
    $operator = $operators[rand(0, count($operators) - 1)];
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return generateExpression($min, $max, $operators);
            } else {
                return $num1 / $num2;
            }
    }
}
?>