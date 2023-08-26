
<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (Exception $e) {
    die("Erreur " . $e->getMessage());
}

//recuperation de lemail et du mot de passe
$Adress = $_POST['Adress'];
$motDePasse = $_POST['Mot_de_passe'];
echo "Email: $Adress <br> Password: $motDePasse <br>";

// requete de verfication de email dans la base d donnee
$req = $bdd->prepare("SELECT * FROM register WHERE Email= :email");
$req->execute([
    'email' => $Adress,
]);
$donnees = $req->fetch();
// var_dump($donnees);
//on recupere les donnees dans $user

//requete pr selectionner role de lutilisateur otre

$recu = $bdd->prepare("SELECT role_utilisateur FROM register WHERE Email= :Adress");
$recu->execute([
    'Adress' => $Adress,
]);

$status = $recu->fetch();
echo $status['role_utilisateur'];

// var_dump("wwwww".$status);

//requete de verfication de email entrepise dans la base d donnee
// $ent=$bdd->query("SELECT * FROM entreprise ");
// $d= $ent->fetch();
// $mail= $d['email'];
// echo "ddddddddd: $mail <br>";
// var_dump($d);

$entreprise = $bdd->prepare("SELECT * FROM entreprise WHERE email= :Adress ");

$entreprise->execute([
    ":Adress" => $Adress,
]);

$status_entreprise = $entreprise->fetch();

// $status_entreprise=$entreprise->fetch();
// var_dump("aaaaaaaa", $status_entreprise,"<br>");

// echo $status_entreprise['nom_entreprise'];
// echo $status_entreprise['role_name'];
// echo $status_entreprise['id'];

//.........................................
// var_dump($status['role_utilisateur']);
// echo $status['role_name'];
///selection du nom utilisateur dont lemail est celui donner dans le login
$nom_utilisateur = $bdd->prepare("SELECT id,nom_utilisateur FROM register WHERE Email= :Adress ");
$nom_utilisateur->execute([
    "Adress" => $Adress,
]);
$nom_user = $nom_utilisateur->fetch();
// echo $nom_user['nom_utilisateur'].'<br>';
if ($donnees and password_verify($_POST['Mot_de_passe'], $donnees['Mot_de_passe']) and $status['role_utilisateur'] == 'admin') {
    //demarre la session
    //stock email dans  variable session
    $_SESSION['id'] = $nom_user['id'];
    $_SESSION['nom_utilisateur'] = $nom_user['nom_utilisateur'];
    $_SESSION['email'] = $email;

    header('Location: ./././admin_dashboard/dashboard.php');

} else if ($donnees and password_verify($_POST['Mot_de_passe'], $donnees['Mot_de_passe']) and $status['role_utilisateur'] == 'aprenant') {

    $_SESSION['id'] = $nom_user['id'];
    $_SESSION['nom_utilisateur'] = $nom_user['nom_utilisateur'];

    $_SESSION['email'] = $email;

    header('Location: ../frontend/index.php');

} else if ($status_entreprise and password_verify($_POST['Mot_de_passe'], $status_entreprise['Mot_de_passe']) and $status_entreprise['role_name'] == 'entreprise') {
    $_SESSION['id'] = $status_entreprise['id'];
    $_SESSION['nom_entreprise'] = $status_entreprise['nom_entreprise'];
    echo "j suis dans le else if de entreprise" . ' ' . $_SESSION['nom_entreprise'];

    header('Location: ./entreprise_dashboard/dashboar.php');

} else {
    echo "Email ou mot de passe incorecte";
}
?>



