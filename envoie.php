<?php

$mail = $_POST['user-email'];
$ticketid = $_POST['ticket-id'];
$tickettime = $_POST['ticket-time'];

?>
<script>
var data = new FormData();
data.append('app-token', 'XLGFHEKSPFJTHEPPPA');
data.append('user-email', 'r@R.r');
data.append('ticket-id', '2');
data.append('ticket-time', '4');
var xhr = new XMLHttpRequest();
xhr.open('POST',"http://rashid.fr/lab/ludus/2020-2021/M/GP/api-delhaize/delhaize_api_endpoint.php");
xhr.onload = function () {
// do something to response
<?php
echo $mail."<br/>";
echo $ticketid."<br/>";
echo $tickettime."<br/>";
    ?>
console.log(this.responseText);
    var res = JSON.parse(this.responseText);
    console.log(res);
    
>
};
xhr.send(data);
    
</script>
<?php
//header("Location: inscription.php");
?>