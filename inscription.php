<?php
session_start();
//echo $_SESSION['lan'];
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Jeu Delhaize Frozen II" />
        <meta property="og:description"   content="You played the Frozen II game from the delhaize website" />
        <meta property="og:image"         content="https://www.journaldugeek.com/content/uploads/2017/04/reine-des-neiges-snowman.jpg" />
        <link rel="stylesheet" href="inscription.css"/>
        <?php if($_SESSION['lan']=='fr'){echo '<title>PAGE INSCRIPTION</title>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display|Roboto:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito|Abril+Fatface|Muli|Creo|Quicksand|Shrikhand|Raleway|Gelasio:700i&display=swap" rel="stylesheet">';
        }else{if($_SESSION['lan']=='en'){echo '<title>REGISTRATION page</title>
         	<meta charset="utf-8"/>
			<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display|Roboto:400,400i,700,700i&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Nunito|Abril+Fatface|Muli|Creo|Quicksand|Shrikhand|Raleway|Gelasio:700i&display=swap" rel="stylesheet">';
            }else{if($_SESSION['lan']=='nl'){echo '<title>PAGE INSCRIPTION</title>
                    <meta charset="utf-8"/>
                    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display|Roboto:400,400i,700,700i&display=swap" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css?family=Nunito|Abril+Fatface|Muli|Creo|Quicksand|Shrikhand|Raleway|Gelasio:700i&display=swap" rel="stylesheet">';
                }else{echo '<title>ERROR</title>';}}}?>  
    </head>
    <body style="">
        <?php 
        if($_SESSION['lan']=='nl'){
            echo '<img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2_eng.png" />
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" id="form">
            <img src="Asset/Graphique/AssetsSiteWeb/page_inscription/texte_inscrivez_vous_ndl_PNG8.png"/ style="margin-top:-40%;">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input style="width: 75%;height: 60%;border-color:red;" type="email" name="user-email" id="mail" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input style="width: 60%;height: 60%;border-color:red;" type="txt" name="ticket-id" id="ticketid" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET TIJD</span> <input style="height: 60%;width:65%;border-color:red;" type="number" name="ticket-time" id="tickettime" id="fname"/>
            </div>
            <input type="image" form="form" style="    margin-top: 10%;
    margin-left: 20%;
    margin-bottom: -15%;" src="./Asset/Graphique/AssetsSiteWeb/page_inscription/bouton_envoyer_ndl_PNG8.png" value="envoyer"/>
        </form>';    
        }else{if($_SESSION['lan']=='fr'){
            echo '
            <img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2.png" />
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" style="display:block;" id="form">
            <img src="Asset/Graphique/AssetsSiteWeb/page_inscription/texte_inscrivez_vous_PNG8.png"/ style="margin-top: -50%;margin-left: -40%;margin-right: -40%;padding-right: 20%;">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input style="width: 75%;height: 60%;border-color:red;" type="email" name="user-email" id="mail" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input style="width: 60%;height: 60%;border-color:red;" type="txt" name="ticket-id" id="ticketid" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TEMPS TICKET</span> <input style="height: 60%;width:65%;border-color:red;" type="number" name="ticket-time" id="tickettime" id="fname"/>
            </div>
            <input type="image" form="form" style="    margin-top: 10%;
    margin-left: 20%;
    margin-bottom: -15%;" src="./Asset/Graphique/AssetsSiteWeb/page_inscription/bouton_envoyer_fr_PNG8.png" value="envoyer"/>
        </form>';
        }    
        else{
            echo '<img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2_eng.png" />
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" style="display:block;" id="form">
            <img src="Asset/Graphique/AssetsSiteWeb/page_inscription/texte_inscrivez_vous_eng_PNG8.png"/ style="margin-top:-40%;">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input style="width: 75%;height: 60%;border-color:red;" type="email" name="user-email" id="mai" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input style="width: 60%;height: 60%;border-color:red;" type="txt" name="ticket-id" id="ticketid" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET TIME</span> <input style="height: 60%;width:65%;border-color:red;" type="number" name="ticket-time" id="tickettime" id="fname"/>
            </div>
            <input type="image" form="form" style="    margin-top: 10%;
    margin-left: 20%;
    margin-bottom: -15%;" src="./Asset/Graphique/AssetsSiteWeb/page_inscription/bouton_envoyer_eng_PNG8.png" value="envoyer"/>
        </form>';
        }}
        ?>
        
    </body>
</html>