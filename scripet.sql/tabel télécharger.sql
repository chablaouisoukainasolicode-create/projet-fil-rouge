CREATE TABLE telechargements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    id_user INT NOT NULL,
    id_livre INT NOT NULL,

    date_telechargement TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_user) REFERENCES utilisateurs(id),
    FOREIGN KEY (id_livre) REFERENCES livres(id)
);