<?php
//Modifier l'action dans le "form" si l'on veut uniquement envoyer la requette sans generer de pdf
$pdo = new PDO('mysql:host=localhost:3306;dbname=corona', 'daniel', 'EQuU1zodeqEhzlc3paSUNBbrUB');
$data = [
    'firstname' => htmlspecialchars($_POST['firstname']),
    'lastname' => htmlspecialchars($_POST['lastname']),
    'birthday' => htmlspecialchars($_POST['birthday']),
    'placeofbirth' => htmlspecialchars($_POST['placeofbirth']),
    'address' => htmlspecialchars($_POST['address']),
    'city' => htmlspecialchars($_POST['city']),
    'zipcode' => htmlspecialchars($_POST['zipcode']),
    'datesortie' => htmlspecialchars($_POST['datesortie']),
    'heuresortie' => htmlspecialchars($_POST['heuresortie']),
    'checkbox' => ''
];

if (isset($_POST["checkbox-travail"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-travail"]) . ",";
if (isset($_POST["checkbox-sante"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-sante"]) . ",";
if (isset($_POST["checkbox-famille"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-famille"]) . ",";
if (isset($_POST["checkbox-handicap"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-handicap"]) . ",";
if (isset($_POST["checkbox-convocation"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-convocation"]) . ",";
if (isset($_POST["checkbox-missions"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-missions"]) . ",";
if (isset($_POST["checkbox-transits"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-transits"]) . ",";
if (isset($_POST["checkbox-animaux"])) $data['checkbox'] .= htmlspecialchars($_POST["checkbox-animaux"]) . ",";

$query = "INSERT INTO `attestation`(`Prenom`, `Nom`, `DateDeNaissance`, `LieuDeNaissance`, `Adresse`, `Ville`, `CodePostal`, `DateDeSortie`, `HeureDeSortie`, `Motif`) VALUES (:firstname, :lastname, :birthday, :placeofbirth, :address, :city, :zipcode, :datesortie, :heuresortie, :checkbox)";

$success = $pdo->prepare($query)->execute($data);