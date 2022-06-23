<?php
if(isset($_POST["envoyer"])){
    $prenom=$_POST["prenom"];
    $nom=$_POST["nom"];
    $mail=$_POST["mail"];
    $num=$_POST["num"];
    $message=$_POST["message"];

    /***requete mysql***/
$req =$base->prepare("INSERT INTO contact_tourisme('prenom', 'nom', 'mail', 'num', 'message') VALUES (?),(?),(?),(?),(?)");
/*execut */
$req->execute(array($prenom,$nom,$mail,$num,$message));
}
?>