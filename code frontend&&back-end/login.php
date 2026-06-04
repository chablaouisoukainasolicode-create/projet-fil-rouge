<?php
session_start();
require "config/config.php";

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if($user && $password == $user['mot_de_passe']) {
       $_SESSION['user'] = $user;

        header("Location: index.php");
        exit();

    } else {
        $erreur = "Email ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <div class="container">
    <h2>Login</h2>

    <form method="POST" >
        <div class="input">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email"><br><br>

        <div class="input">
            <label>mot de passe</label>
            <input type="password" name="mot_de_passe" placeholder="Enter your password"><br><br>
        </div>

        <button class="button" name="login">Login</button><br><br>

        <p class="text">
          Vous n'avez pas de compte ?
            <a href="register.php">Register</a>
        </p>
    </form>
</div>
</body>
</html>