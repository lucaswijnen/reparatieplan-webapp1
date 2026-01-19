<?php
$host="db";
$Database="bieb";
$User="user";
$Password="user";

session_start(); 

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$Database;charset=utf8", $User, $Password);
} catch (PDOException $error) {
    // Header redirect to 5400.html page with a really nice message that something was fucked up

}

// Submit login formulier op basis van loginj submit $_POST['login']

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        $errors['username'] = true;
    }


    if (empty($password)) {
        $errors['password'] = true;
    }


    if (empty($errors)) {
        // Alle usernames en passwords uit de database halen
        // $sql = "SELECT * FROM users";
        // $result = $pdo->query($sql);
        // $result = $result->fetch();

        // print_r($result);exit;

        $sql = "SELECT * FROM users WHERE username = :username AND password = :password LIMIT 1";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        
        $result = $stmt->fetch();
        

print_r($result);exit;


        if ($result->rowCount() === 1) {
            // Match gevonden, doorsturen naar admin.php
            $_SESSION['loggedin_user'] = $result;

            header("Location: admin.php");
            exit;
        } else {
            // Geen match, foutmelding weergeven
            $errors['login'] = true;
        }
    }
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

    <style>

    .error {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }
    </style>

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
        <form class="login-form" method="post">
            <h2 class="login-title">Login</h2>

            <?php if (isset($errors['login'])) { ?>
                <h2>Ongeldige combit</h2>
            <?php } ?>

            <?php if (isset($errors['username'])) { ?>
                <div class="error">
                    username verplicht
                </div>
            <?php } ?>

            <?php if (isset($errors['password'])) { ?>
                <div class="error">
                    password verplicht
                </div> 
            <?php } ?>


            <label class="login-label">Username</label>
            <input type="text" class="login-input" name="username" required>

          

            <label class="login-label">Password</label>
            <input type="password" name="password" class="login-input" required>

      
            <a href="admin.php">
                <button type="submit" name="login" class="login-submit">Login</button>
            </a>

        </form>
    </section>
</body>
</html>
