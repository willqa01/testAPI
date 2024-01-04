<?php

$departement = $_GET['departement'];
$emplacement = $_get['emplacement'];

$url = "http://localhost/API/API2.php?nomDepartement=.$departement.&emplacement=.$emplacement.&isCreate";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
header('Location: http://localhost/API/siteweb.php');