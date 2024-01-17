<?php
ob_start(); 

$connexion = mysqli_connect("localhost", "root", "", "neurouaudition");


if (!$connexion) {
    die("Desolé, connexion à localhost impossible : " . mysqli_connect_error());
}

$requete = "SELECT count(*) FROM client";
$resultat = mysqli_query($connexion, $requete);

if (!$resultat) {
    die("Erreur lors de la requête SELECT : " . mysqli_error($connexion));
}

$count = mysqli_fetch_row($resultat);

$nom = mysqli_real_escape_string($connexion, $_POST['nom']);
$prenom = mysqli_real_escape_string($connexion, $_POST['prenom']);
$age = $_POST['age'];
$tele = $_POST['tele'];


$box1 = isset($_POST['box1']) ? 'Évaluation de l\'audition' : 'F';
$box2 = isset($_POST['box2']) ? 'Adaptation d\'appareils auditifs' : 'F';
$box3 = isset($_POST['box3']) ? 'Suivi et services après-vente' : 'F';

$explication = mysqli_real_escape_string($connexion, $_POST['explication']);


$requete_preparee = $connexion->prepare("INSERT INTO client ( nom, prenom, age, telephone, raison, raison2, raison3, explication) 
                                        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
$requete_preparee->bind_param("ssssssss", $nom, $prenom, $age, $tele, $box1, $box2, $box3, $explication);

if ( !($requete_preparee->execute())) {

    echo "Erreur lors de l'insertion : " . $requete_preparee->error; exit;
}

// Fermer la requête préparée et la connexion à la base de données
$requete_preparee->close();
mysqli_close($connexion);

ob_end_flush(); // Vide la mise en mémoire tampon et envoie la sortie
header("location:rendez-vous.php");
?>
