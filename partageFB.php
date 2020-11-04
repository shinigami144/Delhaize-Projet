<?php
session_start();
if(isset($_POST['score'])){
    $score=$_POST['score'];
}else{$score="cheat:cheat";}

?>
<html>
    <head>
        <script> 
 if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
 // document.write("Vous naviguez avec un navigateur sur mobile !");
 <?php $_SESSION["OS"]= "mobile"; ?>
 }else{
 // document.write("Vous naviguez avec un navigateur sur Desktop !");
 <?php $_SESSION["OS"]= "ordinateur"; ?>
 }
 </script>
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Jeu Delhaize Frozen II" />
        <meta property="og:description"   content="You played the Frozen II game from the delhaize website" />
        <meta property="og:image"         content="https://www.journaldugeek.com/content/uploads/2017/04/reine-des-neiges-snowman.jpg" />
        <link rel="stylesheet" href="partageFB.css"/>
    </head>
    <body style="background: linear-gradient(#472234, #1A364B);background-image: url('Asset/Graphique/AssetsSiteWeb/page_inscription/background_page_inscription_PNG8.png');background-size: 100% 100%;height: 100%;max-height: 100%;min-height: 100%;background-repeat: no-repeat">
        <?php
        if($_SESSION['lan']=='fr'){
            echo '<img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2.png" style="margin-top=-5%;margin-bottom: 5%;"/>';
        }else{
             echo '<img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2_eng.png" />';
        }
        ?>
        <form action="inscription.php" <?php if($_SESSION["OS"]=="ordinateur") {echo' style="margin-top: -3%;"';}else{echo' style="margin-top: 30%;"';} ?>>
        <div style="margin-left: 45%;width: 50%; height: 100%;"><p><?php
                if ($_SESSION['lan']== 'fr')
                    {
                    echo 'Votre score est de '.$score.'<br/><br/>';
                    echo "<button type='submit' style='margin-bottom: 8%;'>Ne pas partager et continuer vers l'inscription au concours</button></p></form>";
                    echo '<div id="fb-share-button" style="margin-bottom: 8%;">
                        <svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid meet">
                        <path class="svg-icon-path" d="M9.1,0.1V2H8C7.6,2,7.3,2.1,7.1,2.3C7,2.4,6.9,2.7,6.9,3v1.4H9L8.8,6.5H6.9V12H4.7V6.5H2.9V4.4h1.8V2.8 c0-0.9,0.3-1.6,0.7-2.1C6,0.2,6.6,0,7.5,0C8.2,0,8.7,0,9.1,0.1z"></path>
                        </svg>
                        <span>partager</span>
                        </div>';
                    echo '<div><a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false" style="width:100%;height:5%;margin-top : 8%;">Tweet #share</a></div><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';
                    }
                else{
                    if($_SESSION['lan']== 'en')
                        {
                        echo 'Your score is '.$score.'<br/><br/>';
                        echo "<button type='submit'>don't share and continue to the concours</button></p></form>";
                        echo '<div id="fb-share-button">
                        <svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid meet">
                        <path class="svg-icon-path" d="M9.1,0.1V2H8C7.6,2,7.3,2.1,7.1,2.3C7,2.4,6.9,2.7,6.9,3v1.4H9L8.8,6.5H6.9V12H4.7V6.5H2.9V4.4h1.8V2.8 c0-0.9,0.3-1.6,0.7-2.1C6,0.2,6.6,0,7.5,0C8.2,0,8.7,0,9.1,0.1z"></path>
                        </svg>
                        <span>partager</span>
                        </div>';
                    echo '<a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false">Tweet #share</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';
                    
                        }
                    else{
                        if($_SESSION['lan']== 'nl'){
                            echo 'Uw score zijn '.$score.'<br/><br/>';
                            echo "<button type='submit'>niet delen & ga door met de concurrentie</button></p></form>"; 
                            echo '<div id="fb-share-button">
                        <svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid meet">
                        <path class="svg-icon-path" d="M9.1,0.1V2H8C7.6,2,7.3,2.1,7.1,2.3C7,2.4,6.9,2.7,6.9,3v1.4H9L8.8,6.5H6.9V12H4.7V6.5H2.9V4.4h1.8V2.8 c0-0.9,0.3-1.6,0.7-2.1C6,0.2,6.6,0,7.5,0C8.2,0,8.7,0,9.1,0.1z"></path>
                        </svg>
                        <span>partager</span>
                        </div>';
                    echo '<a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false">Tweet #share</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';

                        }
                        else{
                            echo 'Your score is '.$score.'<br/><br/>';
                        echo "<button type='submit'>don't share</button>
                        <button type='submit'>continue to the concours</button></p></form>";
                       echo '<div id="fb-share-button">
                        <svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid meet">
                        <path class="svg-icon-path" d="M9.1,0.1V2H8C7.6,2,7.3,2.1,7.1,2.3C7,2.4,6.9,2.7,6.9,3v1.4H9L8.8,6.5H6.9V12H4.7V6.5H2.9V4.4h1.8V2.8 c0-0.9,0.3-1.6,0.7-2.1C6,0.2,6.6,0,7.5,0C8.2,0,8.7,0,9.1,0.1z"></path>
                        </svg>
                        <span>partager</span>
                        </div>';
                    echo '<a href="https://twitter.com/intent/tweet?button_hashtag=share&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="I played the delhaize Frozen II Game My score was '.$score.'" data-url="http://delhaize-projet/partageFB.php" data-related="Delhaize,Ludus" data-dnt="true" data-show-count="false" style="width:100%;">Tweet #share</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        ';
                        }
                    }
                }
            ?>
            </div>
        </form>
        <script>
            var fbButton = document.getElementById('fb-share-button');
            var url = 'http://www.delhaize.be';//window.location.href;

            fbButton.addEventListener('click', function() {
                window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
                'facebook-share-dialog',
                'width=800,height=600'
                );
                return false;
            });
        </script>
        <script>
        var twitterShare = document.querySelector('[data-js="twitter-share"]');
        twitterShare.onclick = function(e) {
            e.preventDefault();
            var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
            if(twitterWindow.focus) { twitterWindow.focus();}
            return false;
        }
        </script>
    </body>
</html>