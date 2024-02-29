<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les données sont présentes dans la requête POST
    if (isset($_POST['nom']) && isset($_POST['discord'])) {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $discord = $_POST['discord'];

        // Traitement des données (vous pouvez effectuer des opérations supplémentaires ici)
        // Par exemple, enregistrement dans une base de données ou envoi par e-mail

        // Exemple d'affichage des données récupérées
        echo "<h2>Données reçues :</h2>";
        echo "<p>Nom : $nom</p>";
        echo "<p>Discord : $discord</p>";
    } else {
        // Si les données ne sont pas présentes, afficher un message d'erreur
        echo "Erreur : Veuillez remplir tous les champs du formulaire.";
    }
} else {
    // Si la méthode de requête n'est pas POST, afficher un message d'erreur
    echo "Erreur : La méthode de requête n'est pas valide.";
}
?>
