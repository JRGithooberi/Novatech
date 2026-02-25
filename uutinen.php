 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="styles.css">
    <title>Novatech Solutions - Hosting</title>
</head>

<body>

    <header>
        <!--logon lisäys-->
        <div class="logo">
            <a href="index.php">
            <img src="logo.png" alt="Logo">
            </a>
        </div>
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger">

        <nav>
        <!--navigaatiolinkit-->
            <div>
                <a href="index.php">Home</a>
                <a href="Products.html">Products</a>
                <a href="Story.html">Story</a>
                <a href="Contact.html">Contact</a>
            </div>
        </nav>

    </header>

    <article class="kokonaisuus">

    <?php include('asetukset.php');?>

    <?php
        $sql = "SELECT * FROM uutiset
                WHERE id = ?";
        #echo $sql;

        // Valmistellaan SQL-lause ja lähetetään palvelimelle odottamaan käyttöä
        $stmt = $pdo->prepare($sql);

        // Haetaan kaikki rivit

        $uutinen = htmlspecialchars($_GET['id']);

        $stmt->execute([$uutinen]);

        $rivit = $stmt -> fetchAll();

        foreach($rivit as $rivi) {
        echo '<h2>' . $rivi['otsikko'] . '</h2>';
        echo '<p>' . $rivi['pvm'] . '</p><br>';
        if (!empty($rivi['urli'])) {
        echo '<img src="' . htmlspecialchars($rivi['urli']) . '" alt="Uutisen kuva" class="uutis-kuva">';
        }
        echo '<p>' . $rivi['teksti'] . '</p>';
        } 
        
        $pdo->connection = null;

    ?>

    </article>

    <div style="clear: right;"></div>
    <div style="clear: left;"></div>

    <footer>
        <div class="footerlinks">
            <div>
                <h4>Follow us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>

            <div>
                <h4>More about us</h4>
                <ul>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </div>

        </div>

            <div class="footerinfo">
                <p>Novatech Solutions 2026 – Designed By: Ryhmä 14</p>
            </div>

    </footer>
</body>

</html> 