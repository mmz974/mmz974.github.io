<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expediteur_nom = $_POST['expediteur-nom'];
    $expediteur_adresse = $_POST['expediteur-adresse'];
    $expediteur_telephone = $_POST['expediteur-telephone'];
    $expediteur_email = $_POST['expediteur-email'];
    $destinataire_nom = $_POST['destinataire-nom'];
    $destinataire_adresse = $_POST['destinataire-adresse'];
    $destinataire_telephone = $_POST['destinataire-telephone'];
    $destinataire_email = $_POST['destinataire-email'];
    $type_colis = $_POST['type-colis'];
    $dimensions = $_POST['dimensions'];
    $quantite = $_POST['quantite'];
    $poids = $_POST['poids'];
    $date_enlevement = $_POST['date-enlevement'];
    $heure_enlevement = $_POST['heure-enlevement'];

    $to = "david@delivrex.io";
    $subject = "Demande de devis";
    $message = "Expéditeur : $expediteur_nom\nAdresse : $expediteur_adresse\nTéléphone : $expediteur_telephone\nEmail : $expediteur_email\n\nDestinataire : $destinataire_nom\nAdresse : $destinataire_adresse\nTéléphone : $destinataire_telephone\nEmail : $destinataire_email\n\nType de colis : $type_colis\nDimensions : $dimensions\nQuantité : $quantite\nPoids : $poids\n\nDate d'enlèvement : $date_enlevement\nHeure d'enlèvement : $heure_enlevement";

    $headers = "From: david@delivrex.io\r\n";
    $headers .= "Reply-To: $expediteur_email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    ini_set("SMTP", "ssl://smtp.gmail.com");
    ini_set("smtp_port", "465");
    ini_set("sendmail_from", "david@delivrex.io");
    ini_set("sendmail_path", "/usr/sbin/sendmail -t -i");
    ini_set("smtp_username", "david@delivrex.io");
    ini_set("smtp_password", "david197MAILLOT");

    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.html?devis=success");
    } else {
        header("Location: index.html?devis=error");
    }
} else {
    header("Location: index.html");
}
