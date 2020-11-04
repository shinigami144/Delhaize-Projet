<?php
session_start();
if(isset($_POST['score'])){
    $score=$_POST['score'];
}else{$score="cheat:cheat";}

?>
<html>
    <head>
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Jeu Delhaize Frozen II" />
        <meta property="og:description"   content="You played the Frozen II game from the delhaize website" />
        <meta property="og:image"         content="https://www.journaldugeek.com/content/uploads/2017/04/reine-des-neiges-snowman.jpg" />
        <link rel="stylesheet" href="partage.css"/>
    </head>
    <body>
        <?php
            if ($_SESSION['lan']== 'fr'){
                echo '<image id="FrozenImage" src="./Asset/Graphique/AssetsSiteWeb/page_partage/logo_frozen2.png">';
                echo '<image id="TextLangue" src="./Asset/Graphique/AssetsSiteWeb/page_partage/texte_score_fr_PNG8.png">';
                echo '
                <div>
                    <p>'.$score.'</p>
                </div>';
            }
            else{
                echo '<image id="FrozenImage" src=./Asset/Graphique/AssetsSiteWeb/page_partage/logo_frozen2_engETndl.png>';
                if($_SESSION['lan']== 'nl'){
                    echo '<image id="TextLangue" src="./Asset/Graphique/AssetsSiteWeb/page_partage/texte_score_ndl_PNG8.png">';
                    echo '
                    <div>
                        <span>'.$score.'</span>
                    </div>';
                }
                else{
                    echo '<image id="TextLangue" src="./Asset/Graphique/AssetsSiteWeb/page_partage/texte_score_eng_PNG8.png">';
                    echo '
                    <div>
                        <span>'.$score.'</span>
                    </div>';
                }
                
            }
            echo '<image id="FacebookButton" src="./Asset/Graphique/AssetsSiteWeb/page_partage/facebook_icon_PNG8.png">';
            echo '<image id="TwiterButton" src="./Asset/Graphique/AssetsSiteWeb/page_partage/twitter_icon_PNG8.png">';
    ?>
    </body>
    <script>
        var fbButton = document.getElementById('FacebookButton');
        var url = 'http://www.delhaize.be';//window.location.href;

        fbButton.addEventListener('click', function() {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
            'facebook-share-dialog',
            'width=800,height=600'
        );
        return false;
        });
        var twitterShare = document.getElementById("TwiterButton");
        twitterShare.onclick = function(e) {
            e.preventDefault();
            var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
            if(twitterWindow.focus) { twitterWindow.focus();}
            return false;
        }
     </script>



</html>

