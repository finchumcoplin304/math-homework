<?php
// Define variables
$studentName = "John Doe";
$password = "securepass";

// Check if password is correct
if($password == "securepass") {
  echo "Login successful!";
} else {
  echo "Incorrect password. Please try again.";
}

// Display student name
echo "<h1> Welcome, $studentName!</h1>";
?>
