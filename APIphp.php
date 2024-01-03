<?php

class Utilisateur{

    public $nom = "Ducon";
    public $prenom = "Pierre-françois";
    public $age = 30;
    public $adresse = [        
        "rue" => "123 rue de la République",
        "ville" => "Paris",
        "codePostal" => "75001",
    ];
    public $hobbies = [
         "lecture",
         "voyage",
         "manger"
     ];
}

$retour = new Utilisateur();

if (isset($_GET['age'])){
    $retour->age = $_GET["age"];
}
if (isset($_GET['nom'])){
    $retour->nom = $_GET["nom"];
}
if (isset($_GET['prenom'])){
    $retour->prenom = $_GET["prenom"];
}
// if (isset($_GET['adresse'])){
//     $retour->adresse = $_GET["adresse"];
//}
if (isset($_GET['hobbies'])){
    $retour->hobbies = $_GET["hobbies"];
}
if (isset($_GET['adresse'])) {
    $adresse = $_GET['adresse'];
    $retour->adresse['ville'] = $adresse['ville'];
}


print_r($retour);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo json_encode($retour, JSON_UNESCAPED_UNICODE);