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
                <div class="Contenu"><button type="submit" name="langue" value='en'><img src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_eng_PNG8.png" alt="English"/></button></div>
                <div class="Contenu"><button type="submit" name="langue" value='fr'><img src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_fr_PNG8.png" alt="French"/></button></div>
                <div class="Contenu"><button type="submit" name="langue" value='nl'><img src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_ndl_PNG8.png" alt="Nederlands"/></button></div>
            </div>
        </form>
    </body>
</html>