<?php
/**
 * Database Connection Handler
 * Handles database connection with proper error handling and configuration
 */

// Load configuration
if (file_exists('../config.php')) {
    require_once '../config.php';
} else {
    // Fallback to default configuration
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "malabis");
    define("DEBUG_MODE", true);
}

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    if (defined('DEBUG_MODE') && DEBUG_MODE) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        die("Database connection error. Please try again later.");
    }
}

// Set charset to utf8mb4 for proper emoji and special character support
$conn->set_charset("utf8mb4");

// Enable error reporting for mysqli (in development)
if (defined('DEBUG_MODE') && DEBUG_MODE) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}
?>

