<?php
session_start();
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
        input#fname {margin-top: -22px;margin-left: 31%;padding: 14px;width: 320px;
            border: 2px solid #E07B74;font-family: muli;font-size: 12px;background-color: white;
            color: #484948;}
        .inscription_main {width: 544px;margin: 0 auto;color:white;font-size: 12px;font-family: "Muli";}
        .inscription_info {background-color:white;padding: 10px;margin-top:10px;}
        .surlignetexte {box-shadow: 0 -10px  #FFE963 inset;font-family: "mont";color: #484948;font-size: 15px;text-transform: uppercase;margin-right: 15px;}
        </style>   
    </head>
    <body>
        <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA" method="POST" class="inscription_main" style="display:block;">
            <div class="inscription_info">
                <span class="surlignetexte">E-MAIL</span> <input type="email" name="user-email" id='mail' id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET NUMBER</span> <input type="txt" name="ticket-id" id='ticketid' id="fname"/>
            </div>
            <div class="inscription_info">
				<span class="surlignetexte">TICKET TIME</span> <input type="number" name="ticket-time" id='tickettime' id="fname"/>
            </div>
            <input type="submit" value="envoyer"/>
        </form>
    </body>
</html>