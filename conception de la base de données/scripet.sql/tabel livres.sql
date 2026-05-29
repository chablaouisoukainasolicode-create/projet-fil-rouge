CREATE TABLE livres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100),
    auteur VARCHAR(100),
    description TEXT,
    image VARCHAR(150),
    fichier_pdf VARCHAR(150),
    categorie_id INT,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (categorie_id)
    REFERENCES categories(id)
    ON DELETE CASCADE
);