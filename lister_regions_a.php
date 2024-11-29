
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Lister régions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
require_once('conf/connexion.php');
$stmt = $connexion->prepare("SELECT * FROM region");
$stmt->setFetchMode(PDO::FETCH_OBJ);

// Les résultats retournés par la requête seront traités en 'mode' objet
$stmt->execute();

// Parcours des enregistrements retournés par la requête : premier, deuxième…
echo "<table border=1>";
while($enregistrement = $stmt->fetch())
{
  // Affichage des champs noregion et nomregion de la table 'region'
  echo '<tr><td>'.$enregistrement->noregion.'</td><td>'.$enregistrement->nomregion.'</td><tr>';
}
echo "</table>";
?>
</body>
</html>


