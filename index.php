<?php
session_start();

// Proses login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy data untuk autentikasi (ganti dengan data dari database)
    $validUser = "admin";
    $validPass = "password";

    if ($username === $validUser && $password === $validPass) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Redirect ke dashboard
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 14px;
            color: #666666;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            outline: none;
        }

        input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        .btn {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
