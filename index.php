<html>
    <head>
        <link rel="stylesheet" href="img.css"/>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <!--
        <form action="setlanguage.php" method="post">
            <div id="Group">
                <div class="Contenu">
                    <button type="submit" name="langue" value='en'>
                    <img onclick=Click() src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_eng_PNG8.png" alt="English"/>
                </button>
            </div>
                <div class="Contenu"><button type="submit" name="langue" value='fr'><img src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_fr_PNG8.png" alt="French"/></button></div>
                <div class="Contenu"><button type="submit" name="langue" value='nl'><img src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_ndl_PNG8.png" alt="Nederlands"/></button></div>
            </div>
        </form>
-->
        <form action="setlanguage.php" method="post">
            <input type="text">
            <div id="Group">
                <div class="Contenu">
                    <img onclick='Click(this)' src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_eng_PNG8.png" alt="English"/>
                </button>
            </div>
                <div class="Contenu">
                   <img onclick='Click(this)' src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_fr_PNG8.png" alt="French"/>
                </div>
                <div class="Contenu">
                    <img onclick='Click(this)' src="./Asset/Graphique/AssetsSiteWeb/page_langues/drapeau_ndl_PNG8.png" alt="Nederlands"/>
                </div>
            </div>
        </form>
    </body>
    <script>
        function Click(element){
            console.log(element.alt);

        }

    </script>
</html>