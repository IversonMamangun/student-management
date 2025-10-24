<?php
declare(strict_types=1);

require __DIR__ . '/../../config/db.php';
$config = require __DIR__ . '/../../config/config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle login form submission
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        http_response_code(400);
        exit('Email and password are required.');
    }

    try {
        $stmt = $db->connection->prepare(
            "SELECT * FROM students WHERE email = :email LIMIT 1"
        );
        $stmt->execute([':email' => $email]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($student && password_verify($password, $student['password'])) {
            // Start a session to persist login
            session_start();
            $_SESSION['student_id'] = $student['id'];
            $_SESSION['student_email'] = $student['email'];

            echo "<script>
                alert('Login successful');
                window.location.href='/student_management/Views/dashboard.view.php';
            </script>";
            exit;
        } else {
            http_response_code(401);
            echo "Invalid email or password.";
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo "Login failed: " . htmlspecialchars($e->getMessage());
    }
} else {
    // Show login form
    require_once "../../Views/Auth/login_view.php";
}
