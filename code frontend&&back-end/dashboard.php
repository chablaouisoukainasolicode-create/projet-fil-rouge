<?php
require "../config/config.php";

// Nombre des livres
$totalLivres = $pdo->query("SELECT COUNT(*) FROM livres")->fetchColumn();

// Nombre des catégories
$totalCategories = $pdo->query("SELECT COUNT(*) FROM categories")->fetchColumn();

// Nombre des utilisateurs
$totalUsers = $pdo->query("SELECT COUNT(*) FROM utilisateurs")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <style>
        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f5f5f5;
        }

        h1{
            text-align:center;
            margin:30px 0;
            color:#5C4033;
        }

        .dashboard{
            width:90%;
            margin:auto;
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,.1);
            text-align:center;
        }

        .card h2{
            color:#5C4033;
            margin-bottom:10px;
        }

        .number{
            font-size:35px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<h1> Dashboard Admin</h1>

<div class="dashboard">

    <div class="card">
        <h2>Livres</h2>
        <div class="number">
            <?= $totalLivres ?>
        </div>
    </div>

    <div class="card">
        <h2>Catégories</h2>
        <div class="number">
            <?= $totalCategories ?>
        </div>
    </div>

    <div class="card">
        <h2>Utilisateurs</h2>
        <div class="number">
            <?= $totalUsers ?>
        </div>
    </div>

</div>

</body>
</html>