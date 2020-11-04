<?php
session_start();


$mail = $_POST['user-email'];
$ticketid = $_POST['ticket-id'];
$tickettime = $_POST['ticket-time'];

//echo $mail."<br/>";
//echo $ticketid."<br/>";
//echo $tickettime."<br/>";
    
?>
<p id='demo'>

</p>
<script src="delhaize_ga.js"></script>
<script>
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
xhr.onload = function () {
// do something to response

console.log(this.responseText);
    var res = JSON.parse(this.responseText);
    if (res.error){
        document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> error = "+res.error;
        ga("xmas_2020_game_game_ticket_record_fail",{ticketid:'<?php echo $ticketid ?>',time:heure+":"+minute});
        
    }else{
        if(res.winner){
            document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> winners = "+res.winner;
            ga("xmas_2020_game_game_ticket_record_success",{ticketid:'<?php echo $ticketid ?>',time:heure+":"+minute});
        }
        if(!res.winner){
            document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> winners = "+res.winner;
            ga("xmas_2020_game_game_ticket_record_success",{ticketid:'<?php echo $ticketid ?>',time:heure+":"+minute});
        }
    }
};
xhr.send(data);
</script>
<form action="jeu.php">
    <?php
    if ($_SESSION['lan']== 'fr'){
        echo '<button type="submit">Retour vers le jeu</button>';
    }else{if($_SESSION['lan']== 'en'){
        echo '<button type="submit">Back to the game</button>';
    }else{if($_SESSION['lan']== 'nl'){
        echo '<button type="submit">terug naar het spel</button>';
    }else{echo 'error please chose a language';}
         }}
    
    ?>
    
</form>
<?php
//header("Location: inscription.php");
?>