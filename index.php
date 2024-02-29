<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php'; // Chargement de la bibliothèque Twilio

use Twilio\Rest\Client;

// Vos informations Twilio
$sid = 'Votre_SID_Twilio';
$token = 'Votre_token_Twilio';
$twilio_number = 'Votre_numero_Twilio';

// Processus de paiement
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mode_paiement = $_POST['mode_paiement'];

    // Validation des données (vous pouvez ajouter d'autres validations si nécessaire)
    if ($nom && $prenom && $mode_paiement) {
        // Création du corps du message
        $message = "Nouveau paiement reçu!\n";
        $message .= "Nom: $nom\n";
        $message .= "Prénom: $prenom\n";
        $message .= "Mode de paiement: $mode_paiement";

        // Initialisation du client Twilio
        $client = new Client($sid, $token);

        try {
            // Envoi du message
            $client->messages->create(
                'whatsapp:+33699683617', // Votre numéro Twilio
                array(
                    'from' => 'whatsapp:' . $twilio_number,
                    'body' => $message
                )
            );

            echo "Message envoyé avec succès.";
        } catch (Exception $e) {
            echo "Une erreur s'est produite : " . $e->getMessage();
        }
    } else {
        echo "Erreur : Veuillez remplir tous les champs du formulaire de paiement.";
    }
}
?>
