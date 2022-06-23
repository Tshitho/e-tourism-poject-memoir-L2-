<?php
    session_start();
    include_once "base.php";
    if(empty($_SESSION["id"])){
        header("Location:connexion.php");
    }

    if(isset($_POST["envoi"])){
        $message=$_POST["message"];

        if(!empty($message)){
            $envoi=$base->prepare("INSERT INTO message(idM, nom, message) VALUES(?, ?, ?)");
            $envoi->execute(array($_SESSION["id"], $_SESSION["nom"], $message));

            echo "succès";
        }else{
            echo "erreur";
        }
    }
    if(isset($_POST["dec"])){
        session_destroy();
        header("Location:connexion.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <div class="container" style="display:flex;background:violet;">
        <div><p>connecter entant que :</p></div>
        <div><p><?= $_SESSION["nom"];?></p></div>
        <div><form action="" method="post">
            <input type="submit" value="quitter" name="dec">
        </form></div>
    </div>

    <div class="chat">
        <?php
          include "message.php";
        ?>
    </div>
    <br><br>

    <form action="" method="post">
        <textarea name="message" id="msg" cols="30" rows="10" placeholder="votre message"></textarea>
       <br> <input type="submit" value="envoyer" name="envoi">
    </form>
    
    
</body>
</html>