<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy autentikasi (ganti dengan database jika diperlukan)
    if ($username === "admin" && $password === "1234") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
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
</head>
<body>
    <h1>Login</h1>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?= $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Nama Pengguna:</label><br>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Kata Sandi:</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Login</button>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Logout</button>
    </form>
</body>
</html>
