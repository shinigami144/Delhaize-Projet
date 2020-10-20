<html>
    <head>
        <title>Jeu Delhaize</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        require_once('db.php'); 
	
        $host = '127.0.0.1';
        $db   = 'delhaize';
        $user = 'root';
        $pass = '';
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        //connection
        ?>
        <form action="insert.php" method="POST">
            Nom : <input type="txt" name="nom" /> <br/>
            Prénom : <input type="txt" name="prenom" /> <br/>
            email : <input type="email" name="mail1"/>.<br/>
			confirmation email : <input type="email" name="mail2"/> <br/>
            mot de passe : <input type="password" name="pass1"/> <br/>
            confirmation mot de passe : <input type="password" name="pass2"/> <br/>
			adresse : <input type="txt" name="adresse" /> <br/>
            code postal : <input type="number" name="cp" /> <br/>
            <input type="submit"  value="envoyer"/>
        </form>
    </body>
</html>