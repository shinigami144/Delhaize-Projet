<html>
    <head>
        <link rel="stylesheet" href="img.css"/>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <form action="setlanguage.php" method="post" id="formulaire">
            <input id="lan" name="langue" type="hidden" value="" >
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
            var sub = document.getElementById("lan");
            //console.log(element.alt);
            switch(element.alt){
                case "French":
                    sub.value="fr";
                    break;
                case "Nederlands":
                    sub.value="nl";
                    break
                default:
                    sub.value="en";
                    break;
            }
            //console.log(sub.value,subtest.value);
            document.getElementById("formulaire").submit();


        }

    </script>
</html>