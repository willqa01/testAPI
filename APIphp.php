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
if (isset($_GET['rue'])){
    $retour->adresse['rue'] = $_GET["rue"];
}
if (isset($_GET['ville'])){
    $retour->adresse['ville'] = $_GET["ville"];
}
if (isset($_GET['codePostal'])){
    $retour->adresse['codePostal'] = $_GET["codePostal"];
}else {
    $retour->adresse['codePostal'] = "";
}


// if (isset($_GET[0])){
//     $retour->hobbies[0] = $_GET[0];
// }
// if (isset($_GET[1])){
//     $retour->hobbies[1] = $_GET[1];
// }
if (isset($_GET["hobbies1"])){
    $retour->hobbies[0] = $_GET["hobbies1"];
}else {
    $retour->hobbies[0] = "";
}
if (isset($_GET["hobbies2"])){
    $retour->hobbies[1] = $_GET["hobbies2"];
}else {
    $retour->hobbies[1] = "";
}
if (isset($_GET["hobbies3"])){
    $retour->hobbies[2] = $_GET["hobbies3"];
}else {
    $retour->hobbies[2] = "";
}

print_r($retour);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo json_encode($retour, JSON_UNESCAPED_UNICODE);