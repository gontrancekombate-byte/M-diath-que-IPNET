<?php
$titrePage = 'À propos';
require __DIR__ . '/includes/header.php';
?>
<h2>À propos de la médiathèque</h2>
<p>Présentation de la médiathèque IPNET (écris 2-3 paragraphes : mission, horaires, public visé...).</p>
<p>Nous sommes le <strong><?= dateDuJour() ?></strong>.</p>
<?php require __DIR__ . '/includes/footer.php'; ?>