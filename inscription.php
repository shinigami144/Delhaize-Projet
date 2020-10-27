<html>
    <head>
        <title>Jeu Delhaize</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
        session_start();
        ?>
       <div>
            <h1 style="font-size:34px;text-decoration: underline;">Inscription</h1>
            <form action="#web_promo_noel_2020" app-token="XLGFHEKSPFJTHEPPPA"  method="POST">
                <p style="font-size:20px;">
                email : <input type="email" name="user-email" id='mail'/><br/>
                ticket-id : <input type="txt" name="ticket-id" id='ticketid'/> <br/>
                ticket-time : <input type="number" name="ticket-time" id='tickettime' /> <br/>
                    <input type="submit"  value="envoyer"/></p>
            </form>
        </div>
        <script>
        var data = new FormData();
        data.append('app-token', 'XLGFHEKSPFJTHEPPPA');
        data.append('user-email', document.getElementById('mail').value);
        data.append('ticket-id', document.getElementsByName("ticketid").value);
        data.append('ticket-time', document.getElementsByName("tickettime").value);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', "c'est au client de regarder !il avait qu'a nous donner le lien ver l'api mais bon il peut pparament le faire lui meme ...", true);
        xhr.onload = function () {
        // do something to response
        console.log(this.responseText);
        };
        xhr.send(data);
        </script>
    </body>
</html>