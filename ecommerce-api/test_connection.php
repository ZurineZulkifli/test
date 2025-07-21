<?php
// Simple connection test
ob_start();

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

try {
    // Test database connection
    require_once __DIR__ . '/config/db.php';
    
    // Test basic query
    $stmt = $pdo->query("SELECT COUNT(*) as user_count FROM users");
    $result = $stmt->fetch();
    
    ob_clean();
    echo json_encode([
        "success" => true,
        "message" => "Connection successful",
        "database" => "Connected",
        "user_count" => $result['user_count'],
        "timestamp" => date('Y-m-d H:i:s')
    ]);
    
} catch (Exception $e) {
    ob_clean();
    echo json_encode([
        "success" => false,
        "message" => "Connection failed: " . $e->getMessage(),
        "timestamp" => date('Y-m-d H:i:s')
    ]);
}
?>