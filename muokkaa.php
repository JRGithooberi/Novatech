<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uutisen muokkaus</title>
</head>
<body>
   
   <?php include('asetukset.php'); ?>

    <h2>Uutisen muutos</h2>

    <?php
    $sql = "UPDATE uutiset 
            SET otsikko=?, teksti=?, urli=?
            WHERE id = ?";
    #echo $sql;

    // Valmistellaan SQL-lause ja lähetetään palvelimelle odottamaan käyttöä
    $stmt = $pdo->prepare($sql);

    $id = $_POST['id'];
    $otsikko = $_POST['otsikko'];
    $teksti = $_POST['teksti'];
    $urli = $_POST['kuva'];

    $stmt->execute([$otsikko, $teksti, $urli, $id]);
    echo "<p>Uutinen muutettu!</p><br><br>";

    $pdo->connection = null;
    ?>

</body>
</html> 