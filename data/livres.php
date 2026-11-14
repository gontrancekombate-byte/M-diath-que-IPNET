<?php
/**
 * Données du catalogue de la Médiathèque IPNET.
 * Le fichier retourne un tableau associatif : $livres = require 'data/livres.php';
 * Clés : id, titre, auteur, annee, categorie, prix (FCFA), disponible (bool)
 */
return [
    // --- Romans ---
    [
        'id' => 1, 'titre' => 'Une si longue lettre', 'auteur' => 'Mariama Bâ',
        'annee' => 1979, 'categorie' => 'roman', 'prix' => 4500, 'disponible' => true,
    ],
    [
        'id' => 2, 'titre' => 'L\'Enfant noir', 'auteur' => 'Camara Laye',
        'annee' => 1953, 'categorie' => 'roman', 'prix' => 4000, 'disponible' => true,
    ],
    [
        'id' => 3, 'titre' => 'Le Vieux Nègre et la médaille', 'auteur' => 'Ferdinand Oyono',
        'annee' => 1956, 'categorie' => 'roman', 'prix' => 3500, 'disponible' => false,
    ],
    [
        'id' => 4, 'titre' => 'Le Petit Prince', 'auteur' => 'Antoine de Saint-Exupéry',
        'annee' => 1943, 'categorie' => 'roman', 'prix' => 5000, 'disponible' => true,
    ],
    [
        'id' => 5, 'titre' => 'Les Soleils des indépendances', 'auteur' => 'Ahmadou Kourouma',
        'annee' => 1968, 'categorie' => 'roman', 'prix' => 5500, 'disponible' => true,
    ],

    // --- Informatique ---
    [
        'id' => 6, 'titre' => 'Introduction à PHP 8', 'auteur' => 'Jean Dupont',
        'annee' => 2022, 'categorie' => 'informatique', 'prix' => 12000, 'disponible' => false,
    ],
    [
        'id' => 7, 'titre' => 'Algorithmique et programmation', 'auteur' => 'Thomas Cormen',
        'annee' => 2009, 'categorie' => 'informatique', 'prix' => 25000, 'disponible' => true,
    ],
    [
        'id' => 8, 'titre' => 'Clean Code', 'auteur' => 'Robert C. Martin',
        'annee' => 2008, 'categorie' => 'informatique', 'prix' => 20000, 'disponible' => true,
    ],
    [
        'id' => 9, 'titre' => 'HTML5 et CSS3 : apprendre le web', 'auteur' => 'Élodie Martin',
        'annee' => 2019, 'categorie' => 'informatique', 'prix' => 9500, 'disponible' => true,
    ],
    [
        'id' => 10, 'titre' => 'Réseaux informatiques', 'auteur' => 'Andrew Tanenbaum',
        'annee' => 2011, 'categorie' => 'informatique', 'prix' => 22000, 'disponible' => false,
    ],

    // --- Histoire ---
    [
        'id' => 11, 'titre' => 'Histoire générale de l\'Afrique', 'auteur' => 'Joseph Ki-Zerbo',
        'annee' => 1972, 'categorie' => 'histoire', 'prix' => 15000, 'disponible' => true,
    ],
    [
        'id' => 12, 'titre' => 'Les Empires du Sahel', 'auteur' => 'Djibril Tamsir Niane',
        'annee' => 1960, 'categorie' => 'histoire', 'prix' => 8000, 'disponible' => true,
    ],
    [
        'id' => 13, 'titre' => 'Une brève histoire du Togo', 'auteur' => 'Auteur à compléter',
        'annee' => 2015, 'categorie' => 'histoire', 'prix' => 7000, 'disponible' => false,
    ],

    // --- Science ---
    [
        'id' => 14, 'titre' => 'Une brève histoire du temps', 'auteur' => 'Stephen Hawking',
        'annee' => 1988, 'categorie' => 'science', 'prix' => 9000, 'disponible' => true,
    ],
    [
        'id' => 15, 'titre' => 'L\'Origine des espèces', 'auteur' => 'Charles Darwin',
        'annee' => 1859, 'categorie' => 'science', 'prix' => 10000, 'disponible' => true,
    ],
    [
        'id' => 16, 'titre' => 'Cosmos', 'auteur' => 'Carl Sagan',
        'annee' => 1980, 'categorie' => 'science', 'prix' => 11000, 'disponible' => false,
    ],

    // --- Poésie ---
    [
        'id' => 17, 'titre' => 'Chants d\'ombre', 'auteur' => 'Léopold Sédar Senghor',
        'annee' => 1945, 'categorie' => 'poésie', 'prix' => 4500, 'disponible' => true,
    ],
    [
        'id' => 18, 'titre' => 'Les Fleurs du mal', 'auteur' => 'Charles Baudelaire',
        'annee' => 1857, 'categorie' => 'poésie', 'prix' => 4000, 'disponible' => true,
    ],

    // --- Théâtre ---
    [
        'id' => 19, 'titre' => 'Le Malade imaginaire', 'auteur' => 'Molière',
        'annee' => 1673, 'categorie' => 'théâtre', 'prix' => 3000, 'disponible' => true,
    ],
    [
        'id' => 20, 'titre' => 'Antigone', 'auteur' => 'Jean Anouilh',
        'annee' => 1944, 'categorie' => 'théâtre', 'prix' => 3500, 'disponible' => false,
    ],
];