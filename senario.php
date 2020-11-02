<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8"/>
        
    </head>
    <body>
        <form action="tuto.php">
        <p><?php
                if ($_SESSION['lan']== 'fr')
                    {echo "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.<br/><button type='submit'>Vers le tuto</button> ";}
                else{
                    if($_SESSION['lan']== 'en')
                        {echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><button type='submit'>To the tutorial</button>";}
                    else{
                        if($_SESSION['lan']== 'nl'){
                            echo "Lorem Ipsum is gewoon een proeftekst die wordt gebruikt in de compositie en opmaak voordat deze wordt afgedrukt. Lorem Ipsum is de standaard proeftekst bij het afdrukken sinds de 16e eeuw, toen een anonieme printer stukjes tekst samenbracht om een ​​voorbeeldboek met lettertypen te maken.<br/><button type='submit'>naar de tutorial</button>"; 
                        }
                        else{
                            echo 'error';
                        }
                    }
                }
        ?>
            </p>
        </form>
    </body>
</html>

