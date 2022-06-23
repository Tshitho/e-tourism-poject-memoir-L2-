
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

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V6</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-85 p-b-20">
<form class="login100-form validate-form">
<span class="login100-form-title p-b-70">
Admin
</span>
<span class="login100-form-avatar">
<img src="images/avatar-01.jpg" alt="AVATAR">
</span>
<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="">
<input class="input100" type="text" name="username">
<span class="focus-input100" data-placeholder="Pseudo"></span>
</div>
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
<input class="input100" type="password" name="pass">
<span class="focus-input100" data-placeholder="Mots de passe"></span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Entré
</button>
</div>

</form>
</div>
</div>
</div>
</body>
</html>
https://colorlib.com/etc/lf/Login_v6/index.html