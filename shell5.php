<?php
$fichier = "index.php";

$contenu = file_get_contents($fichier);

$contenu_base64 = base64_encode($contenu);

// Afficher le contenu encodé en base64
echo $contenu_base64;
?>
