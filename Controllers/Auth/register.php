<?php
declare(strict_types=1);

require __DIR__ . '/../../config/db.php';
$config = require __DIR__ . '/../../config/config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $email      = trim($_POST['email'] ?? '');
    $password   = $_POST['password'] ?? '';
    $firstname  = trim($_POST['firstname'] ?? '');
    $lastname   = trim($_POST['lastname'] ?? '');
    $gender     = $_POST['gender'] ?? '';
    $birth_date = $_POST['birth_date'] ?? '';
    $course     = $_POST['course'] ?? '';
    $year_level = $_POST['year_level'] ?? '';

    if ($firstname === '' || $lastname === '' || $email === '' || $password === '') {
        http_response_code(400);
        exit('Firstname, lastname, email, and password are required.');
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        $stmt = $db->connection->prepare(
            "INSERT INTO students 
             (email, password, firstname, lastname, gender, birth_date, course, year_level) 
             VALUES 
             (:email, :password, :firstname, :lastname, :gender, :birth_date, :course, :year_level)"
        );

        $stmt->execute([
            ':email'      => $email,
            ':password'   => $hashedPassword,
            ':firstname'  => $firstname,
            ':lastname'   => $lastname,
            ':gender'     => $gender,
            ':birth_date' => $birth_date,
            ':course'     => $course,
            ':year_level' => $year_level,
        ]);
        echo "<script>
            alert('Submitted');
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
