// Create an array of math problems
$mathProblems = array(
    "What is 2 + 2?",
    "What is 5 x 3?",
    "What is 7 - 3?"
);

// Get a random math problem from the array
$randomMathProblem = $mathProblems[array_rand($mathProblems)];

// Print the random math problem to the page
echo $randomMathProblem;
?>