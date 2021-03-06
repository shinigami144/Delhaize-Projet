<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        html,body{
            margin: 0;
            width: 100%;
            height: 100%;
        }
        canvas{
            width: 100%;
            height: 100%;
        }
        #container { display:block; }
/*
@media only screen and (orientation:portrait){

  #container {

    height: 100vw;

    -webkit-transform: rotate(90deg);

    -moz-transform: rotate(90deg);

    -o-transform: rotate(90deg);

    -ms-transform: rotate(90deg);

    transform: rotate(90deg);

  }

}

@media only screen and (orientation:landscape){

  #container {

     -webkit-transform: rotate(0deg);

     -moz-transform: rotate(0deg);

     -o-transform: rotate(0deg);

     -ms-transform: rotate(0deg);

     transform: rotate(0deg);

  }
  
}*/

    </style>
</head>
<body id="container">
    <form id="form" action="./partageFB.php" method="POST">
        <input  name="score" id="score" type="hidden" value="">
    </form>
    <canvas id="monSuperCanvas"></canvas>
</body>
<script src="./easeljs.min.js"></script>
<script src="./preloadjs.min.js"></script>
<script src="./soundjs.min.js"></script>
<script src="delhaize_ga.js"></script>
<script>
    
    // loading all assets
    var Q = new createjs.LoadQueue();
    createjs.Sound.alternateExtensions = ["mp3"];
    Q.on("complete",completeLoading,this);
    Q.installPlugin(createjs.Sound);
    Q.addEventListener("complete", doneLoading);
    // Image
    Q.loadManifest([

        {id:"T1",src:"./Asset/Graphique/Tuile/Tuile0/tuile_0_PNG8.png"},
        {id:"T2",src:"./Asset/Graphique/Tuile/Tuile1/tuile_1_PNG8.png"},
        {id:"T3",src:"./Asset/Graphique/Tuile/Tuile2/tuile_2_PNG8.png"},
        {id:"T4",src:"./Asset/Graphique/Tuile/Tuile3/tuile_3_PNG8.png"},
        {id:"T5",src:"./Asset/Graphique/Tuile/Tuile4/tuile_4_PNG8.png"},
        {id:"T6",src:"./Asset/Graphique/Tuile/Tuile5/tuile_5_PNG8.png"},
        {id:"T7",src:"./Asset/Graphique/Tuile/Tuile6/tuile_0_PNG8.png"},
        {id:"T8",src:"./Asset/Graphique/Tuile/Tuile7/tuile_1_PNG8.png"},
        {id:"T9",src:"./Asset/Graphique/Tuile/Tuile8/tuile_2_PNG8.png"},
        {id:"T10",src:"./Asset/Graphique/Tuile/Tuile9/tuile_3_PNG8.png"},
        {id:"T11",src:"./Asset/Graphique/Tuile/Tuile10/tuile_4_PNG8.png"},
        {id:"BouleDeNeigeF1",src:"./Asset/Graphique/Snowball/Snowball_Grande/snowball_grande_1.png"},
        {id:"BouleDeNeigeF2",src:"./Asset/Graphique/Snowball/Snowball_Grande/snowball_grande_2.png"},
        {id:"BouleDeNeigeF3",src:"./Asset/Graphique/Snowball/Snowball_Grande/snowball_grande_3.png"},
        {id:"BouleDeNeigeF4",src:"./Asset/Graphique/Snowball/Snowball_Grande/snowball_grande_4.png"},
        {id:"ObstacleBleu",src:"./Asset/Graphique/Obstacle/obstacle_glace.png"},
        {id:"ObstacleVert",src:"./Asset/Graphique/Obstacle/obstacle_sven.png"},
        {id:"Olaf",src:"./Asset/Graphique/BarreProgression/Olaf.png"},
        {id:"Back",src:"./Asset/Graphique/AssetsSiteWeb/page_langues/background_page_langue_PNG8.png"},
        {id:"PlayFr",src:"./Asset/Graphique/Boutons/bouton_jouer_fr_PNG8.png"},
        {id:"PlayEn",src:"./Asset/Graphique/Boutons/bouton_jouer_eng_PNG8.png"},
        {id:"PlayNl",src:"./Asset/Graphique/Boutons/bouton_jouer_ndl_PNG8.png"},
        {id:"Barre",src:"./Asset/Graphique/BarreProgression/barre.png"},
        {id:"fond",src:"./Asset/Sons/DelhaizeSound/Some-Things-Never-Change-From-Frozen-2InstrumentalAudio-Only.ogg"},
       // {id:"boule",src:"./Asset/Sons/DelhaizeSound/GlidingSnowball.ogg"}, 
        {id:"depart",src:"./Asset/Sons/DelhaizeSound/RaceStart.ogg"},
        {id:"fin",src:"./Asset/Sons/DelhaizeSound/RaceEnd.ogg"},
        {id:"iceBreaking",src:"./Asset/Sons/DelhaizeSound/IceBreaking.ogg"}
        
    ]);
    
    // variable
    var canvas
    var scene;
    var terrain;
    var vMax = .88 ;
    var vMin = .05 ;
    var scale;
    var SCALEX;
    var SCALEY;
    var stage=0;
    // tuile
    var hPosTuile1;
    var hPosTuile2;
    var tuile1;
    var tuile2;
    var idInterval
    var idNextTuile;
    // jeu
    var boolGameBegin=true;
    var ConstImageHeight;
    // objet
    var boule;
    var neige;
    var obstacleL;
    //var ObstacleNumberByTuile = [0,1,2,3,4,5,6,7,8,9]
    var vx = 0;
    // barre
    var barre;
    var avancement;
    //
    vy = 0.22;
    var appelonce = true;
    var idFrame;
    var canvasScaleX, canvasScaleY;
    
    //variable lier au décompte et au lancement du timer
    var countdown=3;
    var seconds = 0;
    var min = 0;
    var time=0;
    var score; 
    var decompte;
    var duration =0;


    
    function doneLoading(event) {
        canvas.onclick = handleClick;
    }
    
    function handleClick() {
		//prevent extra clicks and hide text
		canvas.onclick = null;
		
        //console.log("test");

		// indicate the player is now on screen
		//createjs.Sound.play("fond");

		
	}
    // var debug
    var debug = 1;
    function completeLoading(event){
        canvas = document.getElementById("monSuperCanvas");
        PreGame();
       
    }
    
    function handleFileLoad(event)
    {
        //console.log("preload:",event.id,event.src);
    }

    function Animation(){
        // Animation Boule de Neige
        boule.image = Q.getResult("BouleDeNeigeF"+idFrame);
        if(idFrame >3){
            idFrame=1;
        }
        else{
            idFrame++;
        }
    }
    
    function PreGame(){
        document.addEventListener("click", Click);
        document.addEventListener("touchstart", ClickAndro);
        var lan = "<?php echo $_SESSION['lan']; ?>"; 
        console.log(lan);
        canvasScaleX = window.innerWidth/1268.8;
        canvasScaleY = window.innerHeight/792;
        canvas.width= window.innerWidth;
        canvas.height= window.innerHeight;
        scene = new createjs.Stage("monSuperCanvas");
        back = new createjs.Bitmap(Q.getResult("Back"));
        back.scaleX = canvasScaleX;
        back.scaleY = canvasScaleY;
        switch(lan){
            case "fr":
                 bouton = new createjs.Bitmap(Q.getResult("PlayFr"));
                bouton.setBounds(0,0,Q.getResult("PlayFr").width,Q.getResult("PlayFr").height);
            break;
            case "en":
                bouton = new createjs.Bitmap(Q.getResult("PlayEn"));
                bouton.setBounds(0,0,Q.getResult("PlayEn").width,Q.getResult("PlayEn").height);
            break;
            case "nl":
                bouton = new createjs.Bitmap(Q.getResult("PlayNl"));
                bouton.setBounds(0,0,Q.getResult("PlayNl").width,Q.getResult("PlayNl").height);
            break;
            default:
                bouton = new createjs.Bitmap(Q.getResult("PlayEn"));
                bouton.setBounds(0,0,Q.getResult("PlayEn").width,Q.getResult("PlayEn").height);
            break;
        }
        bouton.x = window.innerWidth/2 - bouton.getBounds().width/2;
        bouton.y = window.innerHeight/2 - bouton.getBounds().height/2;
        scene.addChild(back);
        scene.addChild(bouton);
        scene.update();
    }
    
    function initGame(){
        // init canevas
        document.addEventListener("keydown", down);
        document.addEventListener("keyup", up);
        document.addEventListener("touchstart",downAndroid);
        document.addEventListener("touchend",upAndroid);
        canvasScaleX = window.innerWidth/1268.8;
        canvasScaleY = window.innerHeight/792;
        canvas.width= window.innerWidth;
        canvas.height= window.innerHeight;
        obstacleL= [];
        scene = new createjs.Stage("monSuperCanvas");
        terrain = new createjs.Container();
        neige = new createjs.Container();
        fond = new createjs.Shape();
        avancement = new createjs.Shape();
        //affichage du décompte et du timer
        if(isOnMobileSysteme()){
            score = new createjs.Text(min +":"+seconds, "200% Arial", "#000000");
            decompte = new createjs.Text(countdown, "200% Arial", "#000000");
        }
        else{
            score = new createjs.Text(min +":"+seconds, "100px Arial", "#000000");
            decompte = new createjs.Text(countdown, "100px Arial", "#000000");
        }
        score.x = 13/16*canvas.width;
        score.y= 1/10*canvas.height;
        score.textBaseline = "alphabetic";
        
        decompte.x = canvas.width/2;
        decompte.y=canvas.height/2;
        decompte.textBaseline = "alphabetic";
       
        // init tuile1
        tuile1 = new createjs.Bitmap(Q.getResult("T1"));
        hPosTuile1 = 0;
        tuile1.scaleX = canvas.width/Q.getResult("T1").width;
        tuile1.scaleY = canvas.height/Q.getResult("T1").height;
        ConstImageHeight = window.innerHeight;

        //init Tuile 2
        tuile2 = new createjs.Bitmap(Q.getResult("T2"));
        tuile2.scaleX = canvas.width/Q.getResult("T2").width;
        tuile2.scaleY = canvas.height/Q.getResult("T2").height;
        hPosTuile2 = -window.innerHeight;
        //console.log(ConstImageHeight);
        idNextTuile=3;

        // init Obstacle Tuile 2
        InitObstacleBleu(obstacleL);
        InitObstacleVert(obstacleL);


        boule = new createjs.Bitmap(Q.getResult("BouleDeNeigeF1"));
        idFrame=2;
        neige.scaleX=.5;
        neige.scaleY=.5;
        boule.setBounds(0,0,Q.getResult("BouleDeNeigeF1").width,Q.getResult("BouleDeNeigeF1").height);
        boule.x = -boule.getBounds().width/2;
        boule.y = -boule.getBounds().height/2
        neige.setBounds(0,0,Q.getResult("BouleDeNeigeF1").width-60,Q.getResult("BouleDeNeigeF1").height-60);
        neige.x=canvas.width/2;
        neige.y=canvas.height - (boule.getBounds().height/2)*canvasScaleY;
        neige.addChild(boule);
        // init barre
        barre = new createjs.Bitmap(Q.getResult("Barre"));
        barre.setBounds(0,0,Q.getResult("Barre").width,Q.getResult("Barre").height);
        barre.scaleX =  canvasScaleX;
        barre.scaleY =  canvas.height/Q.getResult("Barre").height;
        avancement = new createjs.Bitmap(Q.getResult("Olaf"));
        avancement.setBounds(0,0,Q.getResult("Olaf").width,Q.getResult("Olaf").height);
        avancement.scaleX = canvasScaleX;
        avancement.scaleY = canvasScaleY;
        avancement.y = window.innerHeight - (avancement.getBounds().height/2)*avancement.scaleY;
        avancement.X = -avancement.getBounds().width/2
        // adding in scene
        scene.addChild(tuile2);
        scene.addChild(tuile1);
        scene.addChild(neige);
        scene.addChild(terrain);
        scene.addChild(barre);
        scene.addChild(avancement);
        scene.addChild(score);
        scene.addChild(decompte);
        createjs.Sound.play("fond",{interrupt: createjs.Sound.INTERRUPT_ANY, loop: -1, volume: 0.25});
        // les interval ( timer , animation et update)
        ga("xmas_2020_game_start",null);
        scene.update();
        setInterval(PrepaDepart,1000);
        //
    }
        

    function update(){
        //permet de rafraichir le temps
        //console.log(idNextTuile);
        score.text=min +":"+seconds;
        createjs.Ticker.framerate = 20*(vy/0.88);
        //console.log(createjs.Ticker.framerate);
        if(idNextTuile > 12){
            boolGameBegin = false;
        }
        else{
            // collision bord
            neige.x+=vx;
            if(neige.x<canvas.width/4+neige.getBounds().width/2*neige.scaleX){
                neige.x=canvas.width/4+neige.getBounds().width/2*neige.scaleX;
                if(vy>0.10){
                    vy = vy/2
                }else{
                    vy = 0.05
                }
            }

            if(neige.x>(canvas.width/4)*3-neige.getBounds().width/2*neige.scaleX){
                neige.x=(canvas.width/4)*3-neige.getBounds().width/2*neige.scaleX;
                if(vy>(vMin*2)*canvasScaleY){
                    vy = vy/2
                }else{
                    vy = vMin *canvasScaleY;
                }
            }
            // collision obstcle bleu
            for(var cpt=0;cpt<obstacleL.length;cpt++){
                if(neige.x-((neige.getBounds().width/2)*neige.scaleX)>obstacleL[cpt].x && neige.x-((neige.getBounds().width/2)*neige.scaleX)<obstacleL[cpt].x+obstacleL[cpt].getBounds().width ||(neige.x+(neige.getBounds().width/2)*neige.scaleX>obstacleL[cpt].x && neige.x+((neige.getBounds().width/2)*neige.scaleX)<obstacleL[cpt].x+obstacleL[cpt].getBounds().width )){
                   if((terrain.y+obstacleL[cpt].y+obstacleL[cpt].getBounds().height>neige.y-(neige.getBounds().height/2)*neige.scaleY && terrain.y+obstacleL[cpt].y+obstacleL[cpt].getBounds().height<neige.y+(neige.getBounds().height/2)*neige.scaleY)||(terrain.y+obstacleL[cpt].y>neige.y-(neige.getBounds().height/2)*neige.scaleY && terrain.y+obstacleL[cpt].y<(neige.y+neige.getBounds().height/2)*neige.scaleY)){
                        terrain.removeChild(obstacleL[cpt]);
                        obstacleL.splice(cpt,1);
                        createjs.Sound.play("iceBreaking");
                        scene.update();
                        if(vy>(vMin*2)*canvasScaleY){
                            vy = vy/2
                        }else{
                            vy = vMin*canvasScaleY;
                        }
                    }
                }
            }
            
            //Modification de la taille joueur
            scale = ((100/((vMax*canvasScaleY)-(vMin*canvasScaleY))*(vy-(vMin*canvasScaleY))/2)+50)/100;
            //console.log(scale+"%");
            neige.scaleX = scale * canvasScaleX;
            neige.scaleY = scale * canvasScaleY;
            neige.height = (neige.y+neige.getBounds().width)*neige.scaleY;
            neige.width = (neige.x+neige.getBounds().height)*neige.scaleX;
            
            //Vitesse Joueur
            if(vy<vMax*canvasScaleY){
                vy+=(1/10000) * canvasScaleY;
            }
            //Terrain
            terrain.y+=vy
            UpdatePositionObstacle(obstacleL,vy);
           
            // tuile 
            hPosTuile1+=vy;
            hPosTuile2+=vy;
            hPosTuile1 = ResetTuileUp(tuile1,hPosTuile1);
            hPosTuile2 = ResetTuileUp(tuile2,hPosTuile2);

            // barre 
            avancement.y-=(vy/10);
            // augmentation de la vitesse
            if(vy<vMax*canvasScaleY){
                vy+=(1/10000)* canvasScaleY;
            }
            tuile2.setTransform(0,hPosTuile2,tuile2.scaleX,tuile2.scaleY);
            tuile1.setTransform(0,hPosTuile1,tuile1.scaleX,tuile1.scaleY);
        }
        if(debug == 1){
            //console.log(tuile1,tuile2);
            debug = 0;
        }
        // ------------------------------------------------------------------------------------ END GAME -------------------------------------------------------------------------------------------//
        scene.update();
        if(boolGameBegin == false){
            if(appelonce == true){
                createjs.Sound.play("fin");
                alert("Finis en "+min+":"+seconds);
                clearInterval(time);
                appelonce = false;
                ga("xmas_2020_game_complete",null);
                SendPagePartage();
            }
            
        }
        // ------------------------------------------------------------------------------------ END GAME -------------------------------------------------------------------------------------------//
    }
    /*--------------------------------------------------------------------------------------------------RESET TUILE ZONE---------------------------------------------------------------------------------*/
    function ResetTuileUp(tuile,positionH){
        if(positionH> canvas.height){

            positionH = -ConstImageHeight;
            if(idNextTuile > 11){
                tuile.image = Q.getResult("T1");
            }
            else{
                tuile.image = Q.getResult("T"+idNextTuile);
            }
            idNextTuile++;
        }
        return positionH;
    }
    /*--------------------------------------------------------------------------------------------------RESET TUILE ZONE---------------------------------------------------------------------------------*/
    
    function Click(e){
        if(stage == 0){
            if((e.clientX>bouton.x && e.clientX<bouton.x+bouton.getBounds().width)&&((e.clientY>bouton.y && e.clientY<bouton.y+bouton.getBounds().height))){
                initGame();
                stage = 1;
            }
        }
    }
    function ClickAndro(e){
        if(stage == 0){
            if((e.touches[0].clientX>bouton.x && e.touches[0].clientX<bouton.x+bouton.getBounds().width)&&((e.touches[0].clientY>bouton.y && e.touches[0].clientY<bouton.y+bouton.getBounds().height))){
                initGame();
                stage = 1;
            }
        }
    }
    
    /*--------------------------------------------------------------------------------------------------INPUT USER ZONE---------------------------------------------------------------------------------*/
    // Movement Function 
    function down(e){
        switch(e.keyCode){
            case 37:
                 vx=-1;
            break;
            case 39:
                vx=1;
            break;
        }

    }
    
    function downAndroid(e){
        if(e.touches[0].clientX<window.innerWidth/3){
            vx=-1;
        }else if(e.touches[0].clientX>(window.innerWidth/3)*2){
            vx=1;
        }
    }
        
    function up(e){
        switch(e.keyCode){
            case 37:
                vx=0;
            break;
            case 39:
                vx=0;
            break;
        }
    }
    
    function upAndroid(e){
        vx=0;
    }
    
    /*--------------------------------------------------------------------------------------------------INPUT USER ZONE---------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------------------------------TIMER ZONE---------------------------------------------------------------------------------*/
    //lance le timer
        function Depart()
        {
            createjs.Ticker.on("tick",Animation)
            createjs.Ticker.interval = 25;
            createjs.Ticker.framerate = 20*(vy/0.88);
            idInterval = window.setInterval(update,1);
            time = setInterval(function() 
            {
                seconds++;
                if (seconds >= 60){
                
                    min++;
                    seconds=0;
                    //console.log(min+ " "+seconds);
                }
            }, 1000);
        }
        
        //fait le décompte du temps et lance la fonction Depart
        function PrepaDepart()
        {
            if(countdown==3)
            {
                createjs.Sound.play("depart",{interrupt: createjs.Sound.INTERRUPT_ANY, loop: 0, volume: 0.5});
            }
            countdown--;
            duration++;
            if(duration==15)
            {
                ga("xmas_2020_game_play",{duration:min+":"+seconds+"min"});
                duration=0;
            }
            scene.update();
            if(countdown<0)
            {
                //Depart();
                scene.removeChild(decompte);
            }
            if(countdown==-1)
            {
                Depart();
            }
            if(countdown>-1)
            {
                decompte.text=countdown; 
                  
            }
            
        }
        /*--------------------------------------------------------------------------------------------------TIMER ZONE---------------------------------------------------------------------------------*/
        /*--------------------------------------------------------------------------------------------------OBSTACLE ZONE---------------------------------------------------------------------------------*/
        function InitObstacleBleu(obs){
            var l = [0,0,0,2,2,2,1,3,3,6]
            var ObsPosX = [30,70,50,70,30,70,50,30,30,30,30,50,0,30,70,30,70,30,70];
            var ObsPosY = [35,70,25,50,15,75,50,15,40,50,20,50,0,25,50,75,25,50,75];
            var a = 0;
            var b = 0;
            for(var i=0;i<l.length;i++){
                for(var j=0;j<l[i];j++){
                    //console.log("l et i" ,i,j, a, b);
                    var obstcleBleu = new createjs.Bitmap(Q.getResult("ObstacleBleu"));
                    var posY = -canvas.height*i + ObsPosY[a]*canvas.height/100;
                    var posX = ObsPosX[b]*canvas.width/100;
                    obstcleBleu.setTransform(posX-(Q.getResult("ObstacleBleu").width*canvasScaleX/2),posY-(Q.getResult("ObstacleBleu").height*canvasScaleY/2));
                    obstcleBleu.scaleX = canvasScaleX;
                    obstcleBleu.scaleY = canvasScaleY;
                    obstcleBleu.setBounds(obstcleBleu.x,obstcleBleu.y,Q.getResult("ObstacleBleu").width * obstcleBleu.scaleX,Q.getResult("ObstacleBleu").height*obstcleBleu.scaleY);
                    obs.push(obstcleBleu);
                    terrain.addChild(obstcleBleu);
                    a++;
                    b++;
                }
            }
            //console.log();
        }
        function InitObstacleVert(obs){
            var l = [0,2,3,0,1,2,6,2,3,0];
            var ObsPosX = [30,70,30,50,70,50,50,30,70,30,70,70,30,30,50,70,50,35,30];
            var ObsPosY = [50,75,35,50,65,75,25,70,15,10,75,90,80,40,40,75,10,35,75];
            var a = 0;
            var b = 0;
            for(var i=0;i<l.length;i++){
                for(var j=0;j<l[i];j++){
                    var obstacleVert = new createjs.Bitmap(Q.getResult("ObstacleVert"));
                    posX = ObsPosX[a]*canvas.width/100;
                    posY = -canvas.height*i  + ObsPosY[b]*canvas.height/100;
                    obstacleVert.scaleX = canvasScaleX;
                    obstacleVert.scaleY = canvasScaleY;
                    obstacleVert.setTransform(posX-(Q.getResult("ObstacleVert").width*canvasScaleX/2),posY-(Q.getResult("ObstacleVert").height*canvasScaleY/2),obstacleVert.scaleX,obstacleVert.scaleY);
                    obstacleVert.setBounds(obstacleVert.x,obstacleVert.y,Q.getResult("ObstacleVert").width*obstacleVert.scaleX ,Q.getResult("ObstacleVert").height * obstacleVert.scaleY);
                    obs.push(obstacleVert);
                    terrain.addChild(obstacleVert);
                    a++;
                    b++;
                }
            }
           

        
        }
        function UpdatePositionObstacle(obstacleL,vitesse){
            for(var i;i<obstacleL.length;i++){
                obstacleL[i].y += vitesse;
            }
        }


        /*--------------------------------------------------------------------------------------------------OBSTACLE ZONE---------------------------------------------------------------------------------*/
        /*-------------------------------------------------------------------------------------------------- PARTAGE AVEC AUTRE PAGE -----------------------------------------------------------------*/

        function SendPagePartage(){
            var inputScore =  document.getElementById("score");
            inputScore.value = min + ":" + seconds;
            document.getElementById("form").submit();

        }
        /*-------------------------------------------------------------------------------------------------- PARTAGE AVEC AUTRE PAGE -----------------------------------------------------------------*/
        function isOnMobileSysteme(){
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;

            if( userAgent.includes( "iPad") || userAgent.includes( "iPhone" ) || userAgent.includes( "iPod" ))
            {
            return true;

            }
            else if( userAgent.includes( "Android" ))
            {
            return true;
            }
            else
            {
            return false;
            }
        }




</script>
</html>