<?php
$titrePage = 'Détail du livre';
$livres = require __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';

// filter_input retourne null si absent, false si ce n'est pas un entier
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$livre = ($id !== null && $id !== false) ? trouverLivreParId($livres, $id) : null;

if ($livre === null) {
    http_response_code(404);
}

require __DIR__ . '/includes/header.php';

if ($livre === null): ?>
    <p class="erreur">Livre introuvable : identifiant absent ou invalide.</p>
    <p><a href="catalogue.php">← Retour au catalogue</a></p>
<?php else: ?>
    <h2><?= htmlspecialchars($livre['titre']) ?></h2>
    <ul>
        <li>Auteur : <?= htmlspecialchars($livre['auteur']) ?></li>
        <li>Année : <?= htmlspecialchars((string)$livre['annee']) ?></li>
        <li>Catégorie : <?= htmlspecialchars($livre['categorie']) ?></li>
        <li>Prix : <?= htmlspecialchars(number_format($livre['prix'], 0, ',', ' ')) ?> FCFA</li>
        <li>Disponibilité : <?= $livre['disponible'] ? 'Disponible' : 'Indisponible' ?></li>
    </ul>
    <p><a href="catalogue.php">← Retour au catalogue</a></p>
<?php endif;

require __DIR__ . '/includes/footer.php';