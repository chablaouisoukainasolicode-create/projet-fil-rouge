<?php
require "../config/config.php";



/* CHECK ID */
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID manquant");
}

$id = (int) $_GET['id'];


/* GET LIVRE */
$stmt = $pdo->prepare("SELECT * FROM livres WHERE id = ?");
$stmt->execute([$id]);
$livre = $stmt->fetch();

if (!$livre) {
    die("Livre introuvable");
}

/* GET CATEGORIES */
$cats = $pdo->query("SELECT * FROM categories")->fetchAll();

/* UPDATE */
if (isset($_POST['update'])) {

    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $description = $_POST['description'];
    $id_categorie = $_POST['id_categorie'];

    $stmt = $pdo->prepare("
        UPDATE livres 
        SET titre = ?, auteur = ?, description = ?, id_categorie = ?
        WHERE id = ?
    ");

    $stmt->execute([
        $titre,
        $auteur,
        $description,
        $id_categorie,
        $id
    ]);

    header("Location: liste.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier Livre</title>
</head>
<body>

<h2>Modifier Livre</h2>

<form method="POST">

    <label>Titre</label>
    <input type="text" name="titre" value="<?= htmlspecialchars($livre['titre']) ?>">

    <label>Auteur</label>
    <input type="text" name="auteur" value="<?= htmlspecialchars($livre['auteur']) ?>">

    <label>Description</label>
    <textarea name="description"><?= htmlspecialchars($livre['description']) ?></textarea>

    <label>Catégorie</label>
    <select name="id_categorie">

        <?php foreach ($cats as $c): ?>
            <option value="<?= $c['id'] ?>"
                <?= ($c['id'] == $livre['id_categorie']) ? 'selected' : '' ?>>
                <?= $c['nom'] ?>
            </option>
        <?php endforeach; ?>

    </select>

    <button type="submit" name="update">Modifier</button>

</form>

</body>
</html>