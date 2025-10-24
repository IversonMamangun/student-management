<?php
declare(strict_types=1);

require __DIR__ . '/../../config/db.php';
$config = require __DIR__ . '/../../config/config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $email      = trim($_POST['email'] ?? '');
    $password   = $_POST['password'] ?? '';
    $fullname   = trim($_POST['fullname'] ?? '');
    $gender     = $_POST['gender'] ?? '';
    $birth_date = $_POST['birth_date'] ?? '';
    $role = $_POST['role'] ?? '';

    if ($fullname === '' || $email === '' || $password === '') {
        http_response_code(400);
        exit('fullname, email, and password are required.');
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        $stmt = $db->connection->prepare(
            "INSERT INTO users 
             (email, password, fullname, gender, birth_date, role) 
             VALUES 
             (:email, :password, :fullname, :gender, :birth_date, :role)"
        );

        $stmt->execute([
            ':email'      => $email,
            ':password'   => $hashedPassword,
            ':fullname'   => $fullname,
            ':gender'     => $gender,
            ':birth_date' => $birth_date,
            ':role' => $role,
        ]);
        echo "<script>
            alert('Success');
            window.location.href='/student_management/Views/Auth/login_view.php';
        </script>";
        exit;
    } catch (PDOException $e) {
        http_response_code(500);
        echo "Registration failed: " . htmlspecialchars($e->getMessage());
    }
} else {
    // Only include the view if it's a GET request
    require_once "../../Views/Auth/register_view.php";
}
