<?php 
include_once "base.php";

    if(isset($_POST["envoyer"]))
    {
        $phone=$_POST["phone"];
        $prenom=$_POST["prenom"];
        $nom=$_POST["nom"];
        $depart=$_POST["depart"];
        $retour=$_POST["retour"];
        $adultes=$_POST["adultes"];
        $enfant=$_POST["enfant"];
        $email=$_POST["email"];
        $check=$_POST["check"];
        

        if(!empty($phone) and !empty($prenom) and !empty($nom) and !empty($depart) and !empty($retour) and !empty($adultes) and !empty($enfant) and !empty($email))
        {
                    $req=$base->prepare("INSERT INTO membre(phone, prenom, nom, depart, retour, adultes, enfant, email) VALUES(?, ?, ?, ? , ?, ?, ?, ?)");
                    $req->execute(array($phone, $prenom, $nom, $depart, $retour ,$adultes ,$enfant ,$email));
                    echo "Votre reservation est enregistré";
                    header("Location:reserver.php");
        }else{
            $erreur="Veuillez remplir le champ vide !";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Réservation Mada Tourisme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../../css/style_reserver.css">

<link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="../../css/datepicker.min.css">

<link rel="stylesheet" href="../../css/style_res.css">
<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="wrapper">
<div class="inner">
<form action="" method="post">
<h3>Reservation</h3>
<div class="form-row">
<div class="form-wrapper">
<label for="">Phone *</label>
<input type="text" name="phone" class="form-control" placeholder="Phone">
</div><br>
<div class="form-wrapper">
<label for="">Prenom *</label>
<input type="text" name="prenom" class="form-control" placeholder="Votre Prenom">
</div>
<div class="form-wrapper">
<label for="">Nom *</label>
<input type="text" name="nom" class="form-control" placeholder="Votre Nom">
</div> 


</div>
<div class="form-row">
<div class="form-wrapper">
<label for="">Date de départ *</label>
<span class="lnr lnr-calendar-full"></span>
<input type="date" name="depart" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" >
</div>
<div class="form-wrapper">
<label for="">Date de retour *</label>
<span class="lnr lnr-calendar-full"></span>
<input type="date" name="retour" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" >
</div>
</div>
<div class="form-row last">
<div class="form-wrapper">
<label for="">Adultes *</label>
<select name="adultes" id="" class="form-control">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<i class="zmdi zmdi-chevron-down"></i>
</div>
<div class="form-wrapper">
<label for="">Enfant *</label>
<select name="enfant" id="" class="form-control">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
 
<i class="zmdi zmdi-chevron-down"></i>
</div>
</div>
<div class="form-wrapper">
<label for="">Email *</label>
<input type="email" name="email" class="form-control" placeholder="example@gmail.com">
</div> 
<div class="checkbox">
<label>
<input type="checkbox" name="check">Personne ne rejette, n'aime ou n'évite le plaisir lui-même.
<span class="checkmark"></span>
</label>
</div>
<button type="submit" data-text="Réserver" name="envoyer">
<span>Réserver</span>
</button>
<?php if(isset($erreur)): ?>
            <p style="color:red;"><?= $erreur ?></p>
        <?php endif; ?>
</form>
</div>
</div>
<script src="../../js/jquery-3.3.1.min.js"></script>

<script src="../../js/datepicker.js"></script>
<script src="../../js/datepicker.en.js"></script>
<script src="../../js/main.js"></script>

<script async src="../../js/reserver.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../js/beacon.min.js" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b7aee994b85e86d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>