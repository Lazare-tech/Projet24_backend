<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
}
catch(Exception $e){
  die("Error " . $e->getMessage());
}

$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Email = $_POST["Email"];
$nom_utilisateur= $_POST['nom_utilisateur'];
$Mot_de_passe = $_POST["Mot_de_passe"];
$Contact = $_POST["Contact"];
$passe=password_hash($Mot_de_passe,PASSWORD_DEFAULT);

// echo "Nom: $Nom <br>";
// echo "Prenom: $Prenom <br>";
// echo "Email: $Email <br>";
// echo "Mot de passe: $Mot_de_passe <br>";
// echo "Contact: $Contact <br>";


$son = $bdd->query("SELECT roles FROM Roles WHERE roles = 'editeur' ");
$son_son= $son->fetch();
echo $son_son['roles'];
$req = $bdd->prepare('INSERT INTO register(Nom,Prenom,nom_utilisateur,
Email, Mot_de_passe, Contact, role_utilisateur) VALUES(:Nom, :Prenom, :nom_utilisateur, :Email, :passe, :Contact, :role_utilisateur)');
$req->execute([
'Nom' => $Nom,
'Prenom' => $Prenom,
'nom_utilisateur' => $nom_utilisateur,
'Email'  => $Email,
'passe' => $passe,
'Contact' => $Contact,
'role_utilisateur' => $son_son['roles'],
]);




header('Location: login_form.php');



?>


