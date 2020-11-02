<?php

$mail = $_POST['user-email'];
$ticketid = $_POST['ticket-id'];
$tickettime = $_POST['ticket-time'];

echo $mail."<br/>";
echo $ticketid."<br/>";
echo $tickettime."<br/>";
    
?>
<p id='demo'>

</p>
<script>
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
    document.getElementById('demo').innerHTML="succes = "+ res.success+"<br/> error = "+res.error;
};
xhr.send(data);
</script>
<form action="jeu.html">
    <button type="submit">Retour vers le jeu</button>
</form>
<?php
//header("Location: inscription.php");
?>