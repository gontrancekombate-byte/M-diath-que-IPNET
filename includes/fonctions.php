<?php
/**
 * Retourne une ligne de tableau HTML pour un livre (données échappées).
 */
function afficherLivre(array $livre): string
{
    $dispo = $livre['disponible'] ? 'Disponible' : 'Indisponible';

    return '<tr>'
        . '<td><a href="detail.php?id=' . (int)$livre['id'] . '">'
        . htmlspecialchars($livre['titre']) . '</a></td>'
        . '<td>' . htmlspecialchars($livre['auteur']) . '</td>'
        . '<td>' . htmlspecialchars((string)$livre['annee']) . '</td>'
        . '<td>' . htmlspecialchars($livre['categorie']) . '</td>'
        . '<td>' . htmlspecialchars(number_format($livre['prix'], 0, ',', ' ')) . ' FCFA</td>'
        . '<td>' . $dispo . '</td>'
        . '</tr>';
}

/**
 * Garde uniquement les livres d'une catégorie donnée.
 */
function filtrerParCategorie(array $livres, string $categorie): array
{
    $resultat = array_filter(
        $livres,
        fn($l) => strtolower($l['categorie']) === strtolower($categorie)
    );
    return array_values($resultat); // réindexe le tableau
}

/**
 * Cherche un livre par son id, retourne null s'il n'existe pas.
 */
function trouverLivreParId(array $livres, int $id): ?array
{
    foreach ($livres as $livre) {
        if ($livre['id'] === $id) {
            return $livre;
        }
    }
    return null;
}

/**
 * Compte les livres dont 'disponible' vaut true.
 */
function compterLivresDisponibles(array $livres): int
{
    return count(array_filter($livres, fn($l) => $l['disponible']));
}

/**
 * Fonctions utilitaires (bonus, utiles pour le filtre et la page À propos).
 */
function listerCategories(array $livres): array
{
    return array_values(array_unique(array_column($livres, 'categorie')));
}

function dateDuJour(): string
{
    $mois = ['janvier','février','mars','avril','mai','juin','juillet',
             'août','septembre','octobre','novembre','décembre'];
    return date('j') . ' ' . $mois[(int)date('n') - 1] . ' ' . date('Y');
}