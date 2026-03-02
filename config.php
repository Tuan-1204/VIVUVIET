<?php
// config.php - database configuration and helper

// adjust these settings to match your environment
define('DB_HOST', 'localhost');
define('DB_NAME', 'vivuviet');
define('DB_USER', 'root');
define('DB_PASS', '');

define('BASE_URL', ''); // if your project is in a subdirectory, e.g. '/vivuviet'

function getPDO()
{
    static $pdo;
    if (!$pdo) {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    return $pdo;
}
