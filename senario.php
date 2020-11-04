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
            <a href='./Jeu.php'>
                <img src='./Asset/Graphique/Boutons/bouton_jouer_fr_PNG8.png' href='./Jeu.php'>
            </a>
            <div>
                <p>Au cours de l'été, OLAF a commencé à disparaître à cause du soleil et de la chaleur, votre mission est de profiter de l’hiver pour le renforcer. Utilisez les capacités d’OLAF pour éviter les obstacles, rassemblez à la fois votre cerveau et vos doigts pour créer une coordination physique qui le rendra beaucoup plus grand pendant l'expérience et préparez le pour le prochain été ! </p>
 
                <P>AIDE OLAF À EVITER LES OBSCTACLES EN UTILISANT LES FLECHES  EN TOUCHANT LES BORDS DE L'ÉCRAN POUR DEVENIR UNE GRANDE BOULE DE NEIGE !</p>
            </div>
        </body>";
    }
    elseif($_SESSION['lan']== 'nl'){
        echo "
        <body>
            <a href='./Jeu.php'>
                <img src='./Asset/Graphique/Boutons/bouton_jouer_ndl_PNG8.png'>
            </a>
            <div>
             <p>In de zomer, Olaf begon te verdwijnen van de hitte, uw missie is om de winter te genieten. Gebruik de kracht van Olaf om obstakels te vermijden, Gebruik jouw hersenen en jouw vingers om een fysieke coördinatie oprichten. Olaf zal steeds meer groeien tijden het experiment, zodat hij kan de volgende zomer leven.  </p>
             
                <p> HELP OLAF OBSTAKELS TE VERMIJDEN DOOR DE RANDEN VAN HET SCHERM OF DE PIJLEN AAN TE RAKEN OM EEN GROTE SNEEUWBAL TE WORDEN!</p>
            </div>
        </body>
        "; 
    }
    else{
        {
        echo " 
        <body>
        <a href='./Jeu.php'>
            <img src='./Asset/Graphique/Boutons/bouton_jouer_eng_PNG8.png' href='./Jeu.php'>
        </a>
        <div>
         <p>During the Summer, OLAF began to disappear due sunlight and hotness, your mission is to take advantage of the winter to reinforce him. Use OLAF abilities to avoid the obstacle, gather both, your brain, and fingers to create a physical coordination’s to make him much bigger during the experience and prepare him so he survives next summer!  </p>
         
                <p> HELP OLAF TO AVOID OBSCTACLES BY TOUCHING THE EDGES OF THE SCREEN OR BY USING THE ARROWS TO BECOME A BIG SNOWBALL!</p>
            </div>
        </body>             
        ";
        }
    }                                        
    ?>           


