<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../../functions.php';

class AuthController extends Controller
{
    public function login()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = trim($_POST['username'] ?? '');
            $pass = $_POST['password'] ?? '';

            if ($user === '' || $pass === '') { $errors[] = 'Username and password required'; }

            if (empty($errors)) {
                $stmt = getPDO()->prepare('SELECT * FROM users WHERE username = ?');
                $stmt->execute([$user]);
                $row = $stmt->fetch();
                if ($row && verifyPassword($pass, $row['password_hash'])) {
                    session_start();
                    $_SESSION['user'] = ['id' => $row['id'], 'username' => $row['username']];
                    header('Location: index.php');
                    exit;
                } else {
                    $errors[] = 'Invalid credentials';
                }
            }
        }
        $this->data['errors'] = $errors;
        $this->render('login');
    }

    public function register()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = trim($_POST['username'] ?? '');
            $pass = $_POST['password'] ?? '';
            $email = trim($_POST['email'] ?? '');

            if ($user === '') { $errors[] = 'Username required'; }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = 'Valid email required'; }
            if (strlen($pass) < 6) { $errors[] = 'Password must be at least 6 characters'; }

            if (empty($errors)) {
                try {
                    $hash = hashPassword($pass);
                    $stmt = getPDO()->prepare('INSERT INTO users (username,password_hash,email) VALUES (?,?,?)');
                    $stmt->execute([$user, $hash, $email]);
                    header('Location: index.php?page=login');
                    exit;
                } catch (PDOException $e) {
                    if ($e->getCode() === '23000') {
                        $errors[] = 'Username already taken';
                    } else {
                        $errors[] = 'Database error';
                    }
                }
            }
        }
        $this->data['errors'] = $errors;
        $this->render('register');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
