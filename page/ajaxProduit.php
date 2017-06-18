<?php
include '../includes/produitDb.php';

$annexe=produitLombricomposteurAnnexe($_GET['id']);

echo json_encode($annexe);

?>