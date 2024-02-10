-- Active: 1707006406721@@127.0.0.1@3306

CREATE DATABASE monsite;
use monsite;

CREATE TABLE IF NOT EXISTS categorie (
    id int(11) NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS livre (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    prix float,
    stock INT NOT NULL,
    image VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    id_categorie INT NOT NULL,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id)
);

CREATE TABLE IF NOT EXISTS utilisateur (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS commande (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT(11) NOT NULL,
    id_livre INT(11) NOT NULL,
    date_commande DATETIME NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (id_livre) REFERENCES livre(id)
);


INSERT INTO categorie (nom) VALUES 
('Roman'), 
('Science-fiction'), 
('Biographie'), 
('Histoire'), 
('Fantaisie'), 
('Thriller'), 
('Éducation'), 
('Santé'), 
('Technologie'), 
('Art');

INSERT INTO livre (titre, auteur, prix, stock, image, description, id_categorie) VALUES 
('Le Grand Voyage', 'Jean Dupont', 15.99, 10, 'image1.jpg', 'Un voyage incroyable.', 1),
('Les étoiles lointaines', 'Alice Martin', 17.50, 8, 'image2.jpg', 'Une aventure spatiale.', 2);

INSERT INTO utilisateur (nom, prenom, email, password, image) VALUES 
('Dupont', 'Jean', 'jean.dupont@email.com', 'pass123', 'image1.jpg'),
('Martin', 'Alice', 'alice.martin@email.com', 'pass456', 'image2.jpg');

INSERT INTO commande (id_utilisateur, id_livre, date_commande) VALUES 
(1, 1, NOW()),
(2, 2, NOW());
