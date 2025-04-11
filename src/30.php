<?php
// Initialize PHP variables
$student_id = 12345;
$username = "StudentName"; // Replace with your actual username
$password = "password123"; // Replace with your actual password

// Generate random data
$data = [
    'name' => $username,
    'email' => $username . '@example.com',
    'age' => rand(0, 99),
];

// Update the database table for student records
$servername = "localhost";
$username = $username;
$password = $password;
$dbname = "student_records";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_info (name, email, age) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $data['name'], $data['email'], $data['age']);

if ($stmt->execute()) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
