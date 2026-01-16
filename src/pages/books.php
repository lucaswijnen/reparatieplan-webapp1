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
    <title>Books</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    
<header class="header">
    <div class="header-container">
        <h1 class="logo">The Book Haven</h1>
        <nav class="nav">
            <a href="../index.php" class="nav-link ">Home</a>
            <a href="/pages/about.php" class="nav-link">About</a>
            <a href="/pages/books.php" class="nav-link underline">Books</a>
            <a href="/pages/login.php" class="nav-link login-button">Login</a>
        </nav>
    </div>
</header>

<main class="admin">
  <div class="admin-box">

    <div class="admin-header">
      <h2 class="admin-title">All Books</h2>
    </div>

    <div class="books-list">

      <div class="book-card">
        <img src="../img/boek1.jpg" class="book-image">

        <p class="book-title">Harry Potter</p>
        <p class="book-author">J.K. Rowling</p>
      </div>

      <div class="book-card">
        <img src="../img/boek2.jpg" class="book-image">

        <p class="book-title">The Hobbit</p>
        <p class="book-author">J.R.R. Tolkien</p>
      </div>

      <div class="book-card">
        <img src="../img/boek3.jpg" class="book-image">

        <p class="book-title">1984</p>
        <p class="book-author">George Orwell</p>
      </div>

    </div>
  </div>
</main>


</body>
</html>