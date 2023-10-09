<?php 
define('DB_HOST', '20.212.177.3:3306'); // Remove any spaces between the IP and port
define('DB_USER', 'root');
define('DB_PASS', 'Demouser_2023');
define('DB_NAME', 'demoDBschema');

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
