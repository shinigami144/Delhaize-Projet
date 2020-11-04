<?php
session_start();
echo '
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="senario.css"/>
</head>
<script src="delhaize_ga.js"></script>
<script>
ga("xmas_2020_game_impression",null);
</script>


';
?>
<?php
    if ($_SESSION['lan']== 'fr')
    {
        echo "
        <body>
            <img src='./Asset/Graphique/Boutons/bouton_jouer_fr_PNG8.png'>    
        </body>";
    }
    elseif($_SESSION['lan']== 'nl'){
        echo "
        <body>
            <img src='./Asset/Graphique/Boutons/bouton_jouer_ndl_PNG8.png'>
        </body>
        "; 
    }
    else{
        {
        echo " 
        <body>
            <img src='./Asset/Graphique/Boutons/bouton_jouer_eng_PNG8.png'>
        </body>             
        ";
        }
    }                                        
    ?>           


