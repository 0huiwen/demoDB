<?php

define('DB_HOST', '20.205.163.45');
define('DB_USER', 'root');
define('DB_PASS', 'Demouser2023');
define('DB_NAME', 'demoDBschema');

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array($
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
