<html>
    <head>
        <title>Jeu Delhaize</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Jeu Delhaize Frozen II" />
        <meta property="og:description"   content="You played the Frozen II game from the delhaize website" />
        <meta property="og:image"         content="https://www.journaldugeek.com/content/uploads/2017/04/reine-des-neiges-snowman.jpg" />
    </head>
    <body>
        
        
        
        <?php
        session_start();
        ?>
       <div class='inscription'>
            <h1 style="font-size:34px;text-decoration: underline;">Inscription</h1>
            <form action="envoie.php" app-token="XLGFHEKSPFJTHEPPPA"  method="POST">
                <p style="font-size:20px;">
                email : <input type="email" name="user-email" id='mail'/><br/>
                ticket-id : <input type="txt" name="ticket-id" id='ticketid'/> <br/>
                ticket-time : <input type="number" name="ticket-time" id='tickettime' /> <br/>
                    
                <a href='jeu.php' >Rejouer!</a>
                    <input type="submit"  value="envoyer"/></p>
            </form>
        </div>
        
        <!--bouton partager-->
        
        <!--<script>
        var data = new FormData();
        data.append('app-token', 'XLGFHEKSPFJTHEPPPA');
        data.append('user-email', document.getElementById('mail').value);
        data.append('ticket-id', document.getElementsByName("ticketid").value);
        data.append('ticket-time', document.getElementsByName("tickettime").value);
        var xhr = new XMLHttpRequest();
        xhr.open('POST',"web_promo_noel_2020", true);
        xhr.onload = function () {
        // do something to response
        console.log(this.responseText);
        };
        xhr.send(data);
        </script>-->
    </body>
</html>