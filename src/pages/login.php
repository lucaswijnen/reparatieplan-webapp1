<?php
$host="db";
$Database="bieb";
$User="user";
$Password="user";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$Database;charset=utf8", $User, $Password);
        
    echo "Verbonden";
} catch (PDOException $error) {
    echo "fout";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header-container">
            <h1 class="logo">The Book Haven</h1>
            <nav class="nav">
                <a href="../index.php" class="nav-link ">Home</a>
                <a href="/pages/about.php" class="nav-link">About</a>
                <a href="/pages/books.php" class="nav-link">Books</a>
                <a href="/pages/login.php" class="nav-link login-button">Login</a>
            </nav>
        </div>
    </header>

    <section class="login-section">
        <form class="login-form">
            <h2 class="login-title">Login</h2>

            <label class="login-label">Username</label>
            <input type="text" class="login-input" required>

            <label class="login-label">Password</label>
            <input type="password" class="login-input" required>

            <a href="admin.php">
                <button type="button" class="login-submit">Login</button>
            </a>

        </form>
    </section>
</body>
</html>
