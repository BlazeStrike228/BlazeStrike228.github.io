<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'] ?? '';
    $discord = $_POST['discord'] ?? '';

    echo "Nom: " . $nom . "<br>";
    echo "Discord: " . $discord . "<br>";
} else {
    echo "Méthode non autorisée.";
}
?>
