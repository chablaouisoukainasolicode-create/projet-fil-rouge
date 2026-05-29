CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(100),
    role ENUM('admin','user') DEFAULT 'user',
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);