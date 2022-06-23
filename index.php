
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>MadaTorisme</title>
</head>
<body>
    
   <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form action="" method="post">  
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page"> <button name="accueil" class="a">Accueil</button></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page"><button name="apropos" class="a">Découvrez</button></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page"><button name="service" class="a">Nos service</button></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page"><button name="contact" class="a">Contact</button></a>
          </li>
          </ul>
            </form>
      </div>
    </div>

  </nav>
  <?php
    if(isset($_POST["contact"])){
       include "page_contact/contact.php";
    }
   elseif(isset($_POST["service"])){
        include "page_service/service.php";
    }
    elseif(isset($_POST["apropos"])){
        include "page_apropos/apropos.php";
    }
   else{
       include "page_accueil/accueil.php";
    }

?>
</body>
</html>
