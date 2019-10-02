<?php
$action = $_POST['action'];
if ($action == 'Mailer') {
    $id = $_POST['id'];
    $sexe = $_POST['sexe'];
    $email = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $verifPwd = $_POST['verifPwd'];
    $phone = $_POST['phone'];
    $pays = $_POST['pays'];
    $cgu = $_POST['cgu'];
    $message = 'Identifiant: ' . $id . PHP_EOL;
    $message .= 'Sexe : ' . $sexe . PHP_EOL;
    $message .= 'E-mail : ' . $email . PHP_EOL;
    $message .= 'Password : ' . $pwd . PHP_EOL;
    $message .= 'Telephone : ' . $phone . PHP_EOL;
    $message .= 'Pays : ' . $pays . PHP_EOL;
    echo $message;
    if (mail('christophe.ruiz@etu.univ-amu.fr', 'mail du TD3', $message))
        echo 'Mail envoyé !';
    else echo 'Mail non envoyé :(';
} else if ($action == 'REC') {
    $id = $_POST['id'];
    $sexe = $_POST['sexe'];
    $email = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $verifPwd = $_POST['verifPwd'];
    $phone = $_POST['phone'];
    $pays = $_POST['pays'];
    $cgu = $_POST['cgu'];
    $file = 'data.txt';
    if (!($file = fopen($file, 'a+'))) {
        echo 'Erreur d\'ouverture';
        exit();
    }
    fputs($file, 'id : ' . $id . ', email : ' . $email . PHP_EOL);
    fclose($file);
} else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
$dbLink = mysqli_connect('mysql-christophe.alwaysdata.net', '173824', 'admin_root26+')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'christophe_td2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
$today = date('Y-m-d');
$query = 'INSERT INTO user (login, sexe, email, password, phone, pays, date)';
$query .= " VALUES ('$id',  '$sexe', '$email', '$pwd', '$phone', '$pays', NOW());";
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
} else {
    echo 'Votre inscription (' . $id . ') a été enregistrée, merci' .PHP_EOL;
}
?>
<br>
<a href=".."><button>Retour</button></a>