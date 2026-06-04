<?php
session_start();
include "config/config.php";

$categories = $pdo->query("SELECT * FROM categories LIMIT 6")->fetchAll();

$livres = $pdo->query("
    SELECT l.*, c.nom AS categorie
    FROM livres l
    LEFT JOIN categories c ON l.id_categorie = c.id
    LIMIT 6
")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>online library</title>

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<?php include "includes/navbar.php"; ?>

<!--== HEADER == -->

<section class="header">

    <div class="header-text">
        <h1>
            Découvrez.<br>
            Lisez.<br>
            Téléchargez.
        </h1>

        <p>
            Des milliers de livres à votre disposition.
            Téléchargez gratuitement vos livres préférés.
        </p>

    
    </div>

    <div class="header-image"></div>

</section>

    

</section>

<!-- == CATEGORIES == -->

<section class="categories">

    <div class="title">
        <h2>Catégories</h2>
        <a href="admin/categories">Voir toutes les catégories →</a>
    </div>

    <div class="cat-grid">

        <?php foreach($categories as $cat): ?>

        <div class="cat-card">
            
            <i class="fa-solid fa-book"></i>

            <h3><?= $cat['nom'] ?></h3>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- == LIVRES == -->

<section class="books">

    <div class="title">
        <h2>Livres populaires</h2>
        <a href="livres/liste.php">Voir tous les livres →</a>
    </div>

    <div class="book-grid">

        <?php foreach($livres as $livre): ?>

        <div class="book-card">

            <div class="book-image">

            <?php if($livre['image']) : ?>
          

            <img src="/uploads/images/<?= $livre['image'] ?>">

            <?php else : ?>

            <img src="https://via.placeholder.com/150x220" alt="No cover">

            <?php endif; ?>
               

            </div>

            <h3><?= $livre['titre'] ?></h3>

            <p><?= $livre['auteur'] ?></p>
    <div class="book-buttons">
            <a class="read-btn" 
            href="livres/lire.php?id=<?= $livre['id'] ?>">
        <i class="fa-solid fa-book-open"></i>
        Lire
    </a>

            <a class="download-btn"
            href="livres/telecharger.php?id=<?= $livre['id'] ?>">

                
                Télécharger

            </a>
      </div>
        </div>

        <?php endforeach; ?>

    </div>

</section>

<?php include "includes/footer.php"; ?>
</body>
</html>