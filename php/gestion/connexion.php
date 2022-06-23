
<?php
session_start();
    include_once "base.php";
    if(isset($_POST["valider"])){
        $email=$_POST["email"];
        $mdp=$_POST["pass"];
        

        if(!empty($email)and !empty($mdp)){
            $verif=$base->prepare("SELECT * FROM membre WHERE email=? AND mdp=?");
            $verif->execute(array($email, $mdp));
            $user=$verif->rowCount();
            
            if($user==1){
                $row=$verif->fetch();
                $_SESSION["id"]=$row["idM"];
                $_SESSION["nom"]=$row["nom"];

                header("Location:profil.php");
            }else{
                echo "erreur";
            }
        }
    }
?>


<html>
    <form action="" method="post">
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="pass" placeholder="mot de passe"><br>
        <input type="submit" name="valider" value="valider"><br>
    </form>
</html>