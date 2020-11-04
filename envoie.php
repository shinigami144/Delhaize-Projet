<?php

session_start();

$mail = $_POST['user-email'];
$ticketid = $_POST['ticket-id'];
$tickettime = $_POST['ticket-time'];

//echo $mail."<br/>";
//echo $ticketid."<br/>";
//echo $tickettime."<br/>";


$message1Fr = 'Oups ! Il y a eu une erreur réessayez de vous inscrire.'; 
$message2Fr = 'Inscription réussie ! La chance ! Un bon de 10€ vient d’apparaitre ! Vous recevrez un mail avec les détails.'; 
$message3Fr = 'Inscription réussie ! Mais la chance ne vous a pas sourit cette fois-ci.'; 

$message1En = 'Oops! There was an error, try to register again.'; 
$message2En = 'Successful registration! Lucky ! A 10 € voucher has just appeared! You will receive an email with the details'; 
$message3En = 'Successful registration! But luck didn\'t smile on you this time around.'; 


$message1Nl = 'Oeps! Er is een fout opgetreden, probeer opnieuw te registreren.'; 
$message2Nl = 'Succesvolle registratie! Geluk! Er is zojuist een tegoedbon van 10 € verschenen! U ontvangt een e-mail met de details.'; 
$message3Nl = 'Succesvolle registratie! Maar het geluk lachte je deze keer niet toe.'; 

$message4Fr = ' Voulez-vous rejouer ? :) ';
$message4En = ' Do you want to play again? ';
$message4Nl = ' Wil je opnieuw spelen? ' ;

?>


<!DOCTYPE html>
<html>
 <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="envoie.css"/>>
    <title>Envoie</title>
</head>
    <body> 
    <p id='demo'></p>
    <div id ="message4">
        <h1>
        <?php
            if ($_SESSION['lan']== 'fr'){
            echo $message4Fr;
            }else{if($_SESSION['lan']== 'en'){
            echo $message4En;
            }else{if($_SESSION['lan']== 'nl'){
            echo $message4Nl;
            }else{echo '';}
            }}
    
         ?>

        </h1>
    </div>
<div id="position"> 
    <?php
        if ($_SESSION['lan']== 'fr'){
            echo '<a href="Jeu.php"><img src="Asset/Graphique/Boutons/bouton_rejouer_fr_PNG8.png"></a>';
        }
        else{
            if($_SESSION['lan']== 'nl'){
                echo '<a href="Jeu.php"><img src="Asset/Graphique/Boutons/bouton_rejouer_ndl_PNG8.png"></a>'; 
            }
            else{
                echo '<a href="Jeu.php"><img src="Asset/Graphique/Boutons/bouton_rejouer_eng_PNG8.png"></a>';
            }
        }
        ?>
    </div>
</body>
<script src="delhaize_ga.js"></script>
<script>
    
    //var parentElement = $(document.body.lastChild).closest('div');

    var now=new Date();
    var heure=now.getHours();
    var minute =now.getMinutes();
    var data = new FormData();

    data.append('app-token', 'XLGFHEKSPFJTHEPPPA');
    data.append('user-email','<?php echo $mail ?>' );
    data.append('ticket-id', '<?php echo $ticketid ?>');
    data.append('ticket-time', '<?php echo $tickettime ?>');
    var xhr = new XMLHttpRequest();
    xhr.open('POST',"http://rashid.fr/lab/ludus/2020-2021/M/GP/api-delhaize/delhaize_api_endpoint.php");
    xhr.onload = function () 
    {
        console.log(this.responseText);
        var res = JSON.parse(this.responseText);
        var demo = document.getElementById('demo');
        if (res.error){
            document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> error = "+res.error;
            ga("xmas_2020_game_game_ticket_record_fail",{ticketid:'<?php echo $ticketid ?>',time:heure+":"+minute});
            document.getElementById('demo').innerHTML=
              "<?php
            if ($_SESSION['lan']== 'fr'){
            echo $message1Fr;
            }else{if($_SESSION['lan']== 'en'){
            echo $message1En;
            }else{if($_SESSION['lan']== 'nl'){
            echo $message1Nl;
            }else{echo '';}
            }}
    
         ?>"
            //inscription réussie : 2 cases winner and !winner     
        }
        else{
            if(res.winner){
                document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> winners = "+res.winner;
                ga("xmas_2020_game_game_ticket_record_success",{ticketid:'<?php echo $ticketid ?>',time:heure+":"+minute});
                document.getElementById('demo').innerHTML=
                "<?php
            if ($_SESSION['lan']== 'fr'){
            echo $message2Fr;
            }else{if($_SESSION['lan']== 'en'){
            echo $message2En;
            }else{if($_SESSION['lan']== 'nl'){
            echo $message2Nl;
            }else{echo '';}
            }}
    
         ?>"}""
        
            if(!res.winner){
                document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> winners = "+res.winner;
                ga("xmas_2020_game_game_ticket_record_success",{ticketid:'<?php echo $ticketid ?>',time:heure+":"+minute});
                document.getElementById('demo').innerHTML=
                "<?php
            if ($_SESSION['lan']== 'fr'){
            echo $message3Fr;
            }else{if($_SESSION['lan']== 'en'){
            echo $message3En;
            }else{if($_SESSION['lan']== 'nl'){
            echo $message3Nl;
            }else{echo '';}
            }}
    
         ?>"
            }
        }
    };
    
    xhr.send(data);
    
    </script>
</html>