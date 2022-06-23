<?php 
include_once "base.php";
    if(isset($_POST["ok"])){
        $nom=$_POST["nom"];
        $email=$_POST["email"];
        $sexe=$_POST["sexe"];
        $mdp=$_POST["mdp"];
        $rMdp=$_POST["rMdp"];
        

        if(!empty($nom) and !empty($email) and !empty($sexe) and !empty($mdp) and !empty($rMdp)){
            $verif=$base->prepare("SELECT * FROM membre WHERE email=?");
            $user=$verif->rowCount();
            $row=$verif->fetch();
            if($user==1){
                $erreur="Cette adresse email existe déja !";
            }else{
                if($mdp===$rMdp){
                    $req=$base->prepare("INSERT INTO membre(nom, email, sexe, mdp) VALUES(?, ?, ?, ?)");
                    $req->execute(array($nom, $email, $sexe, $mdp));
                    echo "Succès";
                }else{
                    $erreur="mot de passe non identique !";
                }
            }

            
        }else{
            $erreur="Veuillez remplir le champ vide !";
        }
    }

?>

<html>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="votre nom"><br>
        <input type="email" name="email" placeholder="votre email"><br>
        <input type="radio" name="sexe" value="Homme">Homme <input type="radio" name="sexe" value="Femme">Femme<br>
        <input type="password" name="mdp" placeholder="votre mdp"><br>
        <input type="password" name="rMdp" placeholder="votre rMdp"><br>
        <input type="submit" value="enregistrer" name="ok" onclick="return confirm('êtes vous sure ?')">
        <?php if(isset($erreur)): ?>
            <p style="color:red;"><?= $erreur ?></p>
        <?php endif; ?>
    </form>
</html>