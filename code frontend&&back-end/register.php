<?php

session_start();

require "config/config.php";

if(isset($_POST['register'])) {

    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $password = trim($_POST['mot_de_passe']);

    // vérifier email
    $check = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $check->execute([$email]);

    if($check->rowCount() > 0) {

        $erreur = "Cet email existe déjà";

    } else {

        // insertion utilisateur
        $sql = "INSERT INTO utilisateurs(nom, prenom, email, mot_de_passe)
                VALUES(?,?,?,?)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            $nom,
            $prenom,
            $email,
            $password
        ]);

        $_SESSION['user'] = $nom;

        header("Location: login.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <div class="container" >
<h2 > register</h2>

<form  method="post">
    <div class="input">
        <label > Nom</label>
        <input type="text" name="nom" placeholder="entrez votre nom" required><br><br>
    </div>
    <div class="input">
        <label >prenom </label>
        <input type="text" name="prenom" placeholder="entrez vottre prenom " required><br><br>
    </div>

    <div class="input">
  <label >email</label>
  <input type="email" name="email" placeholder="entrez votre email " required><br><br>
    </div>
    <div class="input">
        <label >mot de passe</label>
        <input type="password" name="mot_de_passe" placeholder="entrez votre mot de passe" required><br><br>
    </div>
    <?php if(isset($erreur)) { ?>
    <p class="error"><?php echo $erreur; ?></p>
<?php } ?>
    <button class="button" type="submit" name="register">S'inscrire</button><br><br>
    <p class="text">Vous avez déjà un compte?
         <a href="login.php">Connectez-vous</a></p>

</form>

</div>
</body>
</html>