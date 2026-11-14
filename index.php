<?php
$titrePage = 'Accueil';
$livres = require __DIR__ . '/data/livres.php';
require __DIR__ . '/includes/header.php';
?>
<h2>Bienvenue à la Médiathèque IPNET</h2>
<p>Notre catalogue compte <strong><?= count($livres) ?></strong> livres,
dont <strong><?= compterLivresDisponibles($livres) ?></strong> disponibles.</p>
<p><a href="catalogue.php">Consulter le catalogue</a></p>
<?php require __DIR__ . '/includes/footer.php'; ?>