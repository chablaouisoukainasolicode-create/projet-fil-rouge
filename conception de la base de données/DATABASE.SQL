CREATE DATABASE online_library;

USE online_library;


CREATE TABLE utilisateurs (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(100),
    role ENUM('admin','user') NOT NULL DEFAULT 'user',
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) NOT NULL
);


CREATE TABLE livres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100),
    auteur VARCHAR(100),
    image VARCHAR(150),
    fichier_pdf VARCHAR(150),
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES categories(id)
);

CREATE TABLE telechargements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    id_livre INT,
    date_telechargement TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur),
    FOREIGN KEY (id_livre) REFERENCES livres(id)
);