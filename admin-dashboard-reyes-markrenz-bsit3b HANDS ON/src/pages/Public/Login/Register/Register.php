<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "movieprojectdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT); 
    $firstname = $data['firstname'];
    $middlename = $data['middlename'];
    $lastname = $data['lastname'];
    $contact = $data['contact'];

    $stmt = $conn->prepare("INSERT INTO users (email, password, firstName, middleName, lastName, contactNo) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $password, $firstname, $middlename, $lastname, $contact);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Registration successful"]);
    } else {
        echo json_encode(["message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["message" => "Invalid request method"]);
}
?>