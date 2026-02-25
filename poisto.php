<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uutisen poisto</title>
</head>
<body>
   
   <?php include('asetukset.php'); ?>

    <h2>Uutisen poisto</h2>
    <?php

    $sql = "DELETE FROM uutiset WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    $id = $_POST['id'];
    $stmt->execute([$id]);

    echo "Uutinen poistettu.";

    $pdo->connection = null;
    ?>

</body>
</html> 