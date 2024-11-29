
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
$stmt = $connexion->prepare("SELECT * FROM plante WHERE noregion = :numeroRegion ");
$stmt->setFetchMode(PDO::FETCH_OBJ);

$numeroRegion = $_GET['numeroRegion'];
$stmt->bindValue(':numeroRegion', $numeroRegion, PDO::PARAM_STR);
$stmt->execute();

echo "<table border=1>";
while($enregistrement = $stmt->fetch())
{
  echo '<tr><td>'.$enregistrement->noplante.'</td><td>'.$enregistrement->nomplante.'</td><tr>';
}
echo "</table>";
?>
</body>
</html>