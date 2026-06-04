# 📚 Online Library

<div align="center">

### Découvrez • Lisez • Téléchargez

Une bibliothèque numérique moderne permettant aux utilisateurs de consulter, lire et télécharger des milliers de livres en ligne.

![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php\&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql\&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5\&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3\&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript\&logoColor=black)

</div>

---

## ✨ Aperçu du Projet

Online Library est une plateforme web développée pour faciliter l'accès aux livres numériques. Les utilisateurs peuvent parcourir différentes catégories, consulter les détails des livres, les lire directement en ligne ou les télécharger.

---

## 🚀 Fonctionnalités

### 👤 Utilisateurs

* 📖 Lire des livres en ligne
* ⬇️ Télécharger des livres
* 🔍 Rechercher des livres
* 📂 Parcourir les catégories
* 📱 Interface responsive

### 🔐 Administration

* ➕ Ajouter des livres
* ✏️ Modifier des livres
* 🗑️ Supprimer des livres
* 📚 Gérer les catégories
* 👥 Gestion des utilisateurs

---

## 🛠️ Technologies Utilisées

| Technologie | Description                              |
| ----------- | ---------------------------------------- |
| PHP         | Développement Back-end                   |
| MySQL       | Base de données                          |
| HTML5       | Structure des pages                      |
| CSS3        | Design et mise en page                   |
| JavaScript  | Interactivité                            |
| PDO         | Connexion sécurisée à la base de données |

---

## 🎨 Design Figma

Le design complet du projet est disponible ici :

🔗 **https://www.figma.com/design/VdnGR7urf4eUWXOnG8GgbH/Untitled?node-id=0-1&m=dev&t=Gws9LepP2oqYb2Bi-1**

---

## 📂 Structure du Projet

```bash
online-library/
│
├── assets/
│   ├── css/
│   ├── images/
│
├── config/
│   └── config.php
│
├── includes/
│   ├── navbar.php
│   └── footer.php
│
├── livres/
│   ├── lire.php
│   ├── liste.php
│   └── telecharger.php
│
├── uploads/
│   ├── images/
│   └── pdf/
│
├── admin/
│
└── index.php
```

---

## ⚙️ Installation

### 1️⃣ Cloner le projet

```bash
git clone https://github.com/votre-compte/online-library.git
```

### 2️⃣ Accéder au dossier

```bash
cd online-library
```

### 3️⃣ Importer la base de données

* Ouvrir phpMyAdmin
* Créer une base de données
* Importer le fichier SQL

### 4️⃣ Configurer la connexion

Modifier :

```php
config/config.php
```

Puis renseigner :

```php
$host = "localhost";
$dbname = "online_library";
$user = "root";
$password = "";
```

### 5️⃣ Lancer le projet

Avec XAMPP :

```bash
http://localhost/online-library
```

---

## 📸 Captures d'écran

Ajoutez ici vos captures d'écran :

### 🏠 Accueil

![Accueil](screenshots/home.png)

### 📚 Livres

![Livres](screenshots/books.png)

### 📂 Catégories

![Catégories](screenshots/categories.png)

---

## 🔒 Sécurité

* Utilisation de PDO
* Requêtes préparées
* Protection contre les injections SQL
* Gestion des sessions PHP

---

## 📈 Améliorations Futures

* ❤️ Système de favoris
* ⭐ Notation des livres
* 💬 Commentaires
* 📧 Notifications email
* 🌙 Mode sombre

---

## 👨‍💻 Auteur

**Développé par IRHABI**

Projet réalisé dans le cadre d'une formation en développement web Full Stack.

### 📬 Contact

* Email : [votre-email@example.com](chablaoui.soukaina.solicode@gmail.com)
* GitHub : https://github.com/chablaouisoukainasolicode-create

---

<div align="center">

### ⭐ N'hésitez pas à mettre une étoile au projet !

Merci pour votre visite ❤️

</div>
