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
        <link rel="stylesheet" href="senario.css"/>
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
        <style>
        @font-face { font-family: "Mont"; src: url('https://dl.dropboxusercontent.com/s/vycatbfi5hvz7he/Mont-Heavy.otf') ;}
        body{height: 100%;margin: 0;padding: 0;font-family: Arial, Verdana, sans-serif;
            font-size: 12px;font-weight: normal;color: #ccc;background-color: #F4F4F4;}
        input#fname {margin-top: -3%;margin-left: 31%;padding: 2%;width: 100%;
            border: 2px solid #E07B74;font-family: muli;font-size: 12pt;background-color: white;
            color: #484948;height: 60%;}
        .inscription_main {width: 40%;margin-left: 45%;color:white;font-size: 12pt;font-family: "Muli";margin-top: -2%;}
        .inscription_info {background-color:white;padding: 1%;margin-top:1%;height: 10%;}
        .surlignetexte {height: auto; box-shadow: 0 -10px  #FFE963 inset;font-family: "mont";color: #484948;font-size: 15pt;text-transform: uppercase;margin-right: 1%;}
        </style>   
    </head>
    <body style="background: linear-gradient(#472234, #1A364B);background-image: url('/Asset/Graphique/AssetsSiteWeb/page_inscription/background_page_inscription_PNG8.png');background-size: 100% 100%;">
        <?php 
        if($_SESSION['lan']=='nl'){
            echo '<img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2_eng.png" /><img src="Asset/Graphique/AssetsSiteWeb/page_inscription/texte_inscrivez_vous_ndl_PNG8.png"/ style="margin-left: 45%;margin-top:-10%;">
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" style="display:block;" id="form">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input style="width: 75%;height: 60%;" type="email" name="user-email" id="mail" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input style="width: 60%;height: 60%;" type="txt" name="ticket-id" id="ticketid" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET TIJD</span> <input style="height: 60%;width:65%;" type="number" name="ticket-time" id="tickettime" id="fname"/>
            </div>
            <input type="image" form="form" style="margin-top: 10%;
            margin-left: 20%;" src="./Asset/Graphique/AssetsSiteWeb/page_inscription/bouton_envoyer_ndl_PNG8.png" value="envoyer"/>
        </form>';    
        }else{if($_SESSION['lan']=='fr'){
            echo '
            <img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2.png" /><img src="Asset/Graphique/AssetsSiteWeb/page_inscription/texte_inscrivez_vous_PNG8.png"/ style="margin-left: 45%;margin-top:-15%;">
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" style="display:block;" id="form">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input style="width: 75%;height: 60%;" type="email" name="user-email" id="mail" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input style="width: 60%;height: 60%;" type="txt" name="ticket-id" id="ticketid" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TEMPS TICKET</span> <input style="height: 60%;width:65%;" type="number" name="ticket-time" id="tickettime" id="fname"/>
            </div>
            <input type="image" form="form" style="margin-top: 10%;
            margin-left: 20%;" src="./Asset/Graphique/AssetsSiteWeb/page_inscription/bouton_envoyer_fr_PNG8.png" value="envoyer"/>
        </form>';
        }    
        else{
            echo '<img src="Asset/Graphique/AssetsSiteWeb/page_inscription/logo_frozen2_eng.png" /><img src="Asset/Graphique/AssetsSiteWeb/page_inscription/texte_inscrivez_vous_eng_PNG8.png"/ style="margin-left: 45%;margin-top:-15%;">
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" style="display:block;" id="form">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input style="width: 75%;height: 60%;" type="email" name="user-email" id="mai" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input style="width: 60%;height: 60%;" type="txt" name="ticket-id" id="ticketid" id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET TIME</span> <input style="height: 60%;width:65%;" type="number" name="ticket-time" id="tickettime" id="fname"/>
            </div>
            <input type="image" form="form" style="margin-top: 10%;
            margin-left: 20%;" src="./Asset/Graphique/AssetsSiteWeb/page_inscription/bouton_envoyer_eng_PNG8.png" value="envoyer"/>
        </form>';
        }}
        ?>
        
    </body>
</html>