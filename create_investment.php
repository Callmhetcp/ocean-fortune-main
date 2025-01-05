<?php
// Include database connection
require_once 'connection.php'; // Ensure this file establishes $conn as the database connection
session_start();

// Redirect to login if the session is not set
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
// Read the input data
$data = json_decode(file_get_contents('php://input'), true);

// Validate input
if (isset($data['action']) && $data['action'] === 'create_investment' && isset($data['name']) && !empty($data['name'])) {
    $investmentName = trim($data['name']);
    $userId = $_SESSION['user_id']; // Replace this with the actual user ID from your session or authentication system

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO investment_cards (user_id, investment_name) VALUES (?, ?)");
        $stmt->bind_param("is", $userId, $investmentName);

        // Execute the statement
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Investment card created successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error creating investment card: ' . $stmt->error]);
        }

        $stmt->close();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Exception: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input.']);
}

$conn->close();
?>
