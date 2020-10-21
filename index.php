<html>
    <head>
        <title>Jeu Delhaize</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
        <?php
        require_once('db.php'); 
        session_start();
        
        if (isset($_SESSION['erreur'])){echo "<p><span style='color: red;
font-size: xxx-large;
margin-left: 38%; '>".$_SESSION['erreur']."</span></p>";};
        /*
        $host = '127.0.0.1:3308';
        $db   = 'delhaize';
        $user = 'root';
        $pass = '';
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$db";
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }*/
        //connection
        ?>
       <div>
            <h1 style="font-size:34px;text-decoration: underline;">Inscription</h1>
            <form action="insert.php" method="POST">
                <p style="font-size:20px;">email : <input type="email" name="mail1"/>.<br/>
                confirmation email : <input type="email" name="mail2"/> <br/>
                code : <input type="txt" name="code" /> <br/>
                    <input type="submit"  value="envoyer"/></p>
            </form>
        </div>
    </body>
</html>