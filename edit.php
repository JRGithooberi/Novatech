 <?php
$action = $_GET['action'] ?? null;
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="styles.css">
    <title>Novatech Solutions - Hosting</title>
</head>

<body>

    <?php include('asetukset.php');?>


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
                <a href="login.php">Login</a>
            </div>
        </nav>

    </header>

<Main>
    <div class="narrowing">
        <h2>Tehvehdys administraattori</h2>
        <p>Mitä haluat tehdä tänään?</p>
    </div>

    <section>
        <div class="fgrid">
            <a href="?action=tallenna" class="fcard">
                <h3>Tallenna uusi uutinen</h3>
                <p>
                Valite tämä tallentaaksesi uutisen.<br>
                Sinun tarvitsee tallentaa otsikko, teksti ja kuvan url.<br><br><br>
                <br>
                <br>
                </p>
            </a>

            <a href="?action=muokkaa" class="fcard">
                <h3>Muokkaa uutista</h3>
                <p>
                Tästä voit muokata jo olemassa olevaa uutista id-numeron perusteella.<br>
                <br>
                </p>
            </a>

            <a href="?action=poista" class="fcard">
                <h3>Uutisen poisto</h3>
                <p>
                Tästä voit poistaa uutisen.<br>
                Voit poistaa uutisen id-numeron perusteella.<br>
                </p>
            </a>
        </div>
    </section>

<!--Tässä on käytetty tekoälyä sen verran jotta sain tuon 
if-lauseen toimimaan enkä vain latonut lomakkeita allekkain-->
    
    <div class="cruditus">
     <?php if ($action): ?>
        <div>
            
            <?php if ($action === 'tallenna'): ?>
                <h3>Uuden uutisen tallennus</h3>
                <form action="tallennus.php" method="POST">
                    <input type="text" name="otsikko" placeholder="Otsikko">
                    <textarea name="teksti" rows="4" placeholder="Teksti"></textarea>
                    <input type="text" name="kuva" placeholder="Kuvan URL">
                    <button type="submit" class="tallenna">Tallenna</button>
                </form>

            <?php elseif ($action === 'muokkaa'): ?>
                <h3>Uutisen muokkaus</h3>
                <form action="muokkaa.php" method="POST">
                    <input type="text" name="id" placeholder="Tietueen ID">
                    <input type="text" name="otsikko" placeholder="Otsikko">
                    <textarea name="teksti" rows="4" placeholder="Teksti"></textarea>
                    <input type="text" name="kuva" placeholder="Kuvan URL">
                    <button type="submit" class="edit">Päivitä</button>
                </form>

            <?php elseif ($action === 'poista'): ?>
                <h3>Uutisen poisto</h3>
                <form action="poisto.php" method="POST">
                    <input type="text" name="id" placeholder="Tietueen ID">
                    <button type="submit" class="poista">Poista</button>
                </form>

            <?php endif; ?>

        </div>
    <?php endif; ?>
    </div>

<p>Kuva tallentuu osoitteella http://shell.hamk.fi/~trtkm25a_6/uploads/</p>

    <!--Tämä on kopioitu w3schoolsin sivuilta php file upload osiosta-->
    <div class="centering">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>

</Main>

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
