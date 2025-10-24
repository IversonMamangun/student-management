<?php
require 'db.php';              // load Database class
$config = require 'config.php'; // load config array

try {
    // Create a new Database instance
    $db = new Database($config['database']);

    // Run a simple test query
    $result = $db->query("SELECT 1 + 1 AS test");
    $row = $result->fetch();

    echo "✅ Database connection successful! Test query result: " . $row['test'] . "<br>";

    // Optional: test against a real table
    // $students = $db->query("SELECT * FROM students LIMIT 1")->fetch();
    // print_r($students);

} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
