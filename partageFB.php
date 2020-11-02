<?php
session_start();
$score=$_POST['score'];
?>
<html>
    <head>
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Jeu Delhaize Frozen II" />
        <meta property="og:description"   content="You played the Frozen II game from the delhaize website" />
        <meta property="og:image"         content="https://www.journaldugeek.com/content/uploads/2017/04/reine-des-neiges-snowman.jpg" />
        
    </head>
    <body style="background-color : grey;">
        <form action="inscription.php">
        <p><?php
                if ($_SESSION['lan']== 'fr')
                    {
                    echo 'Votre score est de '.$score.'<br/><br/>';
                    echo "<button type='submit'>ne pas partager</button>
                        <button type='submit'>Continuer vers l'inscription au concours</button>";
                    echo '<div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="BDuAosSw"></script>
                        <div class="fb-share-button" data-href="http://www.delhaize.be" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
                        <a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false">Tweet #share</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';
                    }
                else{
                    if($_SESSION['lan']== 'en')
                        {
                        echo 'Your score is '.$score.'<br/><br/>';
                        echo "<button type='submit'>don't share</button>
                        <button type='submit'>continue to the concours</button>";
                        echo '<div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v8.0" nonce="BDuAosSw"></script>
                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                            <a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false">Tweet #share</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';
                    
                        }
                    else{
                        if($_SESSION['lan']== 'nl'){
                            echo 'Uw score zijn '.$score.'<br/><br/>';
                            echo "<button type='submit'>niet delen</button>
                            <button type='submit'>Cga door met de concurrentie</button>"; 
                            echo '<div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v8.0" nonce="BDuAosSw"></script>
                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Comment on dit partager en neerlandais ?</a></div>
                            <a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false">Tweet #share</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';

                        }
                        else{
                            echo "sorry it's an error";
                        }
                    }
                }
        ?>
            </p>
        </form>
    </body>
</html>