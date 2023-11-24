<?php

if(!isset($_POST['entreprise'], $_POST['email'], $_POST['activity'], $_POST['tel'], $_POST['place'], $_POST['message'])) {
    header("Location: index.html");
}
else {
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $email = htmlspecialchars($_POST['email']);
    $activity = htmlspecialchars($_POST['activity']);
    $tel = htmlspecialchars($_POST['tel']);
    $place = htmlspecialchars($_POST['place']);
    $message = htmlspecialchars($_POST['message']);
    file_put_contents(
        'donnees.txt',
        "\n" . 'Entreprise: ' . $entreprise .', Email: '. $email .', Activité: '. $activity .', Téléphone: '. $tel .', Localité: '. $place .', Messge: '. $message,
        FILE_APPEND);
    session_start();
    $_SESSION['confirmation'] = "Vos informations sont bien enregistrés avec succès!";
    header('Location: contact.php');
}

?>