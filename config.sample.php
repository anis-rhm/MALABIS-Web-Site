<?php
/**
 * Database Configuration Template
 * Copy this file to config.php and update with your database credentials
 */

// Database Configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", ""); // Add your MySQL password here
define("DB_NAME", "malabis");

// Application Configuration
define("APP_NAME", "MALABIS");
define("APP_URL", "http://localhost/malabis");
define("ADMIN_EMAIL", "admin@malabis.com");

// Security Configuration
define("ENCRYPTION_KEY", "your-secret-key-here"); // Change this to a random string
define("SESSION_TIMEOUT", 3600); // 1 hour in seconds

// File Upload Configuration
define("UPLOAD_PATH", "images/uploads/");
define("MAX_FILE_SIZE", 5242880); // 5MB in bytes
define("ALLOWED_EXTENSIONS", ["jpg", "jpeg", "png", "gif"]);

// Email Configuration (for future use)
define("SMTP_HOST", "smtp.gmail.com");
define("SMTP_PORT", 587);
define("SMTP_USERNAME", "your-email@gmail.com");
define("SMTP_PASSWORD", "your-app-password");

// Development/Production Mode
define("DEBUG_MODE", true); // Set to false in production
define("SHOW_ERRORS", true); // Set to false in production

// Default Admin User (for initial setup)
define("DEFAULT_ADMIN_EMAIL", "admin@malabis.com");
define("DEFAULT_ADMIN_PASSWORD", "admin123"); // Change this immediately after setup
?>