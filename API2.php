<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=itest2', "root", "");
    //echo 'true';
} catch (PDOException $e) {
    echo 'false';
}

$nomDepartement = "";
$emplacement = "";
$isCreate = false;

if (isset($_GET['nomDepartement'])) {
    $nomDepartement = $_GET['nomDepartement'];
}
if (isset($_GET['emplacement'])) {
    $emplacement = $_GET['emplacement'];
}
if (isset($_GET['isCreate'])) {
    $isCreate = true;
}
if ($isCreate) {
    $test = $dbh->prepare('INSERT INTO `departements`(`nom_departement`, `emplacement`) VALUES ("'.$nomDepartement.'","'.$emplacement.'")');
    $test->execute();
}


$test = $dbh->prepare('SELECT * FROM departements');
$test->execute();
$retour = $test->fetchAll();



echo json_encode($retour, JSON_UNESCAPED_UNICODE);