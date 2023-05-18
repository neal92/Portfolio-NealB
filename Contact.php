<?php
if(isset($_POST['submit'])){
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $sujet = $_POST['sujet'];
    $mail = $_POST['mail'];

    // Créer le corps de l'email
    $message = "Nom: $nom\n";
    $message .= "Prénoms: $prenoms\n";
    $message .= "Sujet: $sujet\n";
    $message .= "Email: $mail\n";

    // En-têtes de l'email
    $headers = "From: $mail\r\n";
    $headers .= "Reply-To: $mail\r\n";

    // Envoyer l'email
    if(mail("nealbristol2002@gmail.com", $sujet, $message, $headers)){
        echo "Votre message a été envoyé avec succès.";
    } else{
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>

<!-- Formulaire HTML -->
<form method="post" action="" netlify>
    <p>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>
    </p>

    <p>
        <label for="prenoms">Prénoms :</label>
        <input type="text" name="prenoms" required>
    </p>

    <p>
        <label for="sujet">Sujet :</label>
        <input type="text" name="sujet" required>
    </p>

    <p>
        <label for="mail">Email :</label>
        <input type="email" name="mail" required>
    </p>

    <input type="submit" name="submit" value="Envoyer">
</form>
 