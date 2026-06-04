<?php
require "../config/config.php";

/* ADD CATEGORY */
if(isset($_POST['add'])) {
    $nom = $_POST['nom'];

    $stmt = $pdo->prepare("INSERT INTO categories (nom) VALUES (?)");
    $stmt->execute([$nom]);

    header("Location: categories.php");
    exit;
}

/* DELETE CATEGORY */
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: categories.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Gestion des catégories</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#f4f4f4;
    padding:30px;
}

.container{
    max-width:900px;
    margin:auto;
}

h2{
    color:#5C4033;
    margin-bottom:20px;
}

form{
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,.1);
    margin-bottom:25px;
}

input[type="text"]{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:6px;
    margin-bottom:10px;
}

button{
    background:#5C4033;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#4a3328;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 2px 8px rgba(0,0,0,.1);
}

th{
    background:#5C4033;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #ddd;
    text-align:center;
}

tr:hover{
    background:#f9f9f9;
}

.delete-btn{
    background:#e53935;
    color:white;
    text-decoration:none;
    padding:7px 12px;
    border-radius:5px;
}

.delete-btn:hover{
    background:#c62828;
}
</style>

</head>
<body>

<div class="container">

    <h2>Gestion des catégories</h2>

    <form method="POST">
        <input type="text" name="nom" placeholder="Nom catégorie" required>
        <button type="submit" name="add">Ajouter</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>

        <?php
        $cats = $pdo->query("SELECT * FROM categories")->fetchAll();

        foreach($cats as $c):
        ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= htmlspecialchars($c['nom']) ?></td>
            <td>
                <a href="categories.php?delete=<?= $c['id'] ?>"
                   class="delete-btn"
                   onclick="return confirm('Supprimer cette catégorie ?')">
                   Supprimer
                </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>