<?php
// Test URL rewrite functionality
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

echo json_encode([
    "success" => true,
    "message" => "URL rewrite test",
    "request_uri" => $_SERVER['REQUEST_URI'],
    "script_name" => $_SERVER['SCRIPT_NAME'],
    "query_string" => $_SERVER['QUERY_STRING'],
    "get_params" => $_GET,
    "server_info" => [
        "server_software" => $_SERVER['SERVER_SOFTWARE'],
        "document_root" => $_SERVER['DOCUMENT_ROOT']
    ]
]);
?>