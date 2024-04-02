<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-Type: application/json');


$host = 'sql301.infinityfree.com:3306';
$dbname = 'if0_36186242_users';
$username = 'if0_36186242';
$password = '105RfNdAyWWL';


$dsn = "mysql:host=$host;dbname=$dbname";

try {
  
  $conn = new PDO($dsn, $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Check if email and password are set
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Prepare SQL and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // Execute the query
    $stmt->execute();

    echo json_encode(["message" => "User registered successfully"]);
  } else {
    // Bad request
    http_response_code(400);
    echo json_encode(["message" => "Email and password are required"]);
  }
} catch (PDOException $e) {
  // Catch and handle any errors/exceptions
  http_response_code(500);
  echo json_encode(["message" => "Error: " . $e->getMessage()]);
}

?>
