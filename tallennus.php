<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uutisen tallennus</title>
</head>
<body>
   
   <?php include('asetukset.php'); ?>

    <h2>Tallennus</h2>

    <?php
    $sql = "INSERT INTO uutiset(otsikko, teksti, urli) VALUES (?,?,?)";
    #echo $sql;

    // Valmistellaan SQL-lause ja lähetetään palvelimelle odottamaan käyttöä
    $stmt = $pdo->prepare($sql);

    $otsikko = $_POST['otsikko'];
    $teksti = $_POST['teksti'];
    $urli = $_POST['kuva'];

    $stmt->execute([$otsikko, $teksti, $urli]);
    echo "<p>Uutinen tallennettu!</p><br><br>";

    $pdo->connection = null;
    ?>

</body>
</html> 