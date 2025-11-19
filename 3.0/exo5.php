code

<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jo;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
 
$sth = $mysqlClient->prepare("SELECT * FROM `100`;");
$sth->execute();
$data = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Table 100 - JO</title>
<style>
        body { font-family: Arial; background: #f7f7f7; }
        table { border-collapse: collapse; width: 60%; margin: 40px auto; background: white; border-radius: 6px; overflow: hidden; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: center; }
        th { background: #333; color: white; }
        tr:hover { background: #f0f0f0; }
        h2 { text-align: center; margin-top: 30px; font-weight: 500; }
</style>
</head>
<body>
 
<h2>Résultats de la course 100m</h2>
 
<table>
<thead>
<tr>
<th>Nom</th>
<th>Pays</th>
<th>Course</th>
<th>Temps</th>
</tr>
</thead>
<tbody>
<?php if (count($data) === 0) { ?>
<tr><td colspan="4" style="text-align:center; font-style:italic; color:#555;">Aucun résultat trouvé</td></tr>
<?php } else { ?>
<?php foreach ($data as $value) { ?>
<tr>
<td><?= htmlspecialchars($value["nom"]) ?></td>
<td><?= htmlspecialchars($value["pays"]) ?></td>
<td><?= htmlspecialchars($value["course"]) ?></td>
<td><?= htmlspecialchars($value["temps"]) ?></td>
</tr>
<?php } ?>
<?php } ?>
</tbody>
</table>
 
</body>
</html>