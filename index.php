<html>
    <head>
        <link rel="stylesheet" href="img.css"/>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <form action="setlanguage.php" method="post">
            
            <div id="Group">
                <div class="Contenu"><button type="submit" name="langue" value='en'><img src="img/en.jpg" alt="English"/></button></div>
                <div class="Contenu"><button type="submit" name="langue" value='fr'><img src="img/fr.png" alt="French"/></button></div>
                <div class="Contenu"><button type="submit" name="langue" value='nl'><img src="img/NL.jpg" alt="Dutch"/></button></div>
            </div>
        </form>
    </body>
</html>