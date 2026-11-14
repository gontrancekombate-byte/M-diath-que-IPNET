<?php
$titrePage = 'Catalogue';
require_once __DIR__ . '/includes/fonctions.php'; 
$livres = require __DIR__ . '/data/livres.php';
$categories = listerCategories($livres);

$erreur = null;
$livresAffiches = $livres;
$categorieActive = null;

if (isset($_GET['categorie'])) {
    $demande = trim($_GET['categorie']);

    if (in_array($demande, $categories, true)) {
        $categorieActive = $demande;
        $livresAffiches = filtrerParCategorie($livres, $demande);
    } else {
        $erreur = 'La catégorie « ' . htmlspecialchars($demande) . ' » n\'existe pas.';
        $livresAffiches = [];
    }
}

require __DIR__ . '/includes/header.php';
?>
<h2>Catalogue</h2>

<p>Filtrer :
    <a href="catalogue.php">Tous</a>
    <?php foreach ($categories as $cat): ?>
        | <a href="catalogue.php?categorie=<?= urlencode($cat) ?>">
            <?= htmlspecialchars($cat) ?></a>
    <?php endforeach; ?>
</p>

<?php if ($erreur): ?>
    <p class="erreur"><?= $erreur ?></p>
<?php endif; ?>

<p><?= count($livresAffiches) ?> livre(s) affiché(s)</p>

<?php if (!empty($livresAffiches)): ?>
<table>
    <thead>
        <tr><th>Titre</th><th>Auteur</th><th>Année</th>
            <th>Catégorie</th><th>Prix</th><th>Disponibilité</th></tr>
    </thead>
    <tbody>
        <?php foreach ($livresAffiches as $livre): ?>
            <?= afficherLivre($livre) ?>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>