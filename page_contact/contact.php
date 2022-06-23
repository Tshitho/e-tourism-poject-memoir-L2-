<?php 
include_once "base.php";

    if(isset($_POST["envoyer"]))
    {
        $nom=$_POST["nom"];
        $email=$_POST["email"];
        $sujet=$_POST["sujet"];
        $message=$_POST["message"];
       
        

        if(!empty($nom) and !empty($email) and !empty($sujet) and !empty($message))
        {
                    $req=$base->prepare("INSERT INTO message(nom, email,sujet) VALUES(?, ?, ?, ? )");
                    $req->execute(array($nom,$email,$sujet,$message));
                    echo "message envoyer";
                    header("Location:contact.php");
        }else{
            $erreur="Veuillez remplir le champ vide !";
        }
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 9</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_contact.css" media="screen">
  
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <style class="u-style">.u-section-2 .u-sheet-1 {
  min-height: 758px;
}
.u-section-2 .u-shape-1 {
  width: 617px;
  height: 617px;
  margin: 61px auto 0;
}
.u-section-2 .u-layout-wrap-1 {
  margin-top: -573px;
  margin-bottom: 0;
}
.u-section-2 .u-layout-cell-1 {
  min-height: 593px;
}
.u-section-2 .u-container-layout-1 {
  padding: 29px 30px;
}
.u-section-2 .u-image-1 {
  height: auto;
  background-image: url("img/logo.png");
  background-position: 50% 50%;
  margin-top: 0;
  margin-bottom: 0;
}
.u-section-2 .u-layout-cell-2 {
  min-height: 593px;
}
.u-section-2 .u-container-layout-2 {
  padding: 0;
}
.u-section-2 .u-btn-1 {
  border-style: none;
  font-weight: 700;
  font-size: 1.25rem;
  letter-spacing: 1px;
  margin: 149px auto 0;
  padding: 0;
}
.u-section-2 .u-text-1 {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 1.25rem;
  margin: 20px 30px 0;
}
.u-section-2 .u-text-2 {
  width: 300px;
  margin: 23px auto 0;
}
.u-section-2 .u-line-1 {
  width: 331px;
  height: 3px;
  transform-origin: left center;
  margin: 30px auto 0;
}
.u-section-2 .u-text-3 {
  width: 300px;
  margin: 30px auto 0;
}
.u-section-2 .u-layout-cell-3 {
  min-height: 593px;
}
.u-section-2 .u-container-layout-3 {
  padding: 29px 30px;
}
.u-section-2 .u-image-2 {
  height: auto;
  background-image: url("img/back1.jpg");
  
  background-position: 10% 10%;
  margin-top: 0;
  margin-bottom: 0;
}

@media (max-width: 1199px) {
  .u-section-2 .u-sheet-1 {
    min-height: 678px;
  }
  .u-section-2 .u-shape-1 {
    width: 617px;
    height: 617px;
    margin-top: 30px;
  }
  .u-section-2 .u-layout-wrap-1 {
    margin-top: -543px;
    margin-bottom: 60px;
  }
  .u-section-2 .u-layout-cell-1 {
    min-height: 489px;
  }
  .u-section-2 .u-image-1 {
    width: auto;
  }
  .u-section-2 .u-layout-cell-2 {
    min-height: 489px;
  }
  .u-section-2 .u-text-1 {
    margin-left: 0;
    margin-right: 0;
  }
  .u-section-2 .u-line-1 {
    width: 313px;
  }
  .u-section-2 .u-layout-cell-3 {
    min-height: 489px;
  }
  .u-section-2 .u-image-2 {
    width: auto;
  }
}
@media (max-width: 991px) {
  .u-section-2 .u-sheet-1 {
    min-height: 648px;
  }
  .u-section-2 .u-shape-1 {
    width: 529px;
    height: 529px;
    margin-top: 62px;
  }
  .u-section-2 .u-layout-wrap-1 {
    margin-top: -487px;
  }
  .u-section-2 .u-layout-cell-1 {
    min-height: 375px;
  }
  .u-section-2 .u-layout-cell-2 {
    min-height: 100px;
  }
  .u-section-2 .u-text-2 {
    width: 240px;
  }
  .u-section-2 .u-line-1 {
    width: 240px;
  }
  .u-section-2 .u-text-3 {
    width: 240px;
  }
  .u-section-2 .u-layout-cell-3 {
    min-height: 375px;
  }
}
@media (max-width: 767px) {
  .u-section-2 .u-sheet-1 {
    min-height: 1869px;
  }
  .u-section-2 .u-shape-1 {
    margin-top: 570px;
    margin-right: 0;
  }
  .u-section-2 .u-layout-wrap-1 {
    margin-top: -1039px;
    margin-bottom: -88px;
  }
  .u-section-2 .u-layout-cell-1 {
    min-height: 609px;
  }
  .u-section-2 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }
  .u-section-2 .u-btn-1 {
    align-self: center;
    margin-top: 0;
  }
  .u-section-2 .u-layout-cell-3 {
    min-height: 844px;
  }
  .u-section-2 .u-container-layout-3 {
    padding-left: 10px;
    padding-right: 10px;
  }
}
@media (max-width: 575px) {
  .u-section-2 .u-sheet-1 {
    min-height: 1243px;
  }
  .u-section-2 .u-shape-1 {
    width: 340px;
    height: 340px;
  }
  .u-section-2 .u-layout-wrap-1 {
    margin-top: -850px;
    margin-bottom: -115px;
  }
  .u-section-2 .u-layout-cell-1 {
    min-height: 383px;
  }
  .u-section-2 .u-container-layout-2 {
    padding-top: 30px;
    padding-bottom: 30px;
  }
  .u-section-2 .u-layout-cell-3 {
    min-height: 384px;
  }
}</style>
    
    
    <meta name="theme-color" content="#7391c4">
    <meta property="og:title" content="Page 9">
    <meta property="og:type" content="website">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_message.css">
</head>
  <body class="u-body">
    
  

<section class="ftco-section img bg-hero" style="background-image: url(img/back2.jpg);">
<div class="container">

<div class="row justify-content-center">
<div class="col-lg-11">
<div class="wrapper">
<div class="row no-gutters justify-content-between">
<div class="col-lg-6 d-flex align-items-stretch">

</div>
<div class="col-lg-5">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3 class="mb-4">Entrer en contact</h3>
<div id="form-message-warning" class="mb-4"></div>
<div id="form-message-success" class="mb-4">
Votre message a été envoyé, merci !
</div>
<form method="post" id="contactForm" name="contactForm">
  
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="nom" id="name" placeholder="Nom">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="sujet" id="subject" placeholder="Sujet">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<button  class="btn btn-primary" name="envoyer">Envoyer </button>
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js.pagespeed.jc.EBQCnXhla3.js"></script><script>eval(mod_pagespeed_okeLBgU$XX);</script>
<script>eval(mod_pagespeed_8OyhM9N$v3);</script>
<script src="js/jquery.validate.min.js+main.js.pagespeed.jc.C_85JkpGq7.js"></script><script>eval(mod_pagespeed_j8Iukq3ApB);</script>
<script>eval(mod_pagespeed_X5t$xXt$$v);</script>
<script defer src="js/contact-beacon.min.js" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b9cb8a22e53e585","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>

   
       
       
 
    
    <section class="u-align-center u-clearfix u-section-2" id="carousel_30e1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-grey-5 u-shape u-shape-circle u-shape-1"></div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <div class="u-expanded-width u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="720" data-image-height="1080">
                    <div class="u-preserve-proportions-child" style="padding-top: 100%;"></div>
                  </div>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <a href="" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-1"><span class="u-icon u-text-palette-1-base"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+261.34.52.122.60
                  </a>
                  <h6 class="u-text u-text-palette-1-base u-text-1">Adresse</h6>
                  <p class="u-text u-text-2">Antananarivo ,<br>Madagascar
                  </p>
                  <div class="u-border-10 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                  <p class="u-text u-text-3">contactez nous pour plus d'aventure. <br> Mada Tourisme Vous Rend Plus Heureux.</p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-valign-top-sm u-valign-top-xs u-container-layout-3">
                  <div class="u-expanded-width u-image u-image-circle u-preserve-proportions u-image-2" alt="" data-image-width="720" data-image-height="1080">
                    <div class="u-preserve-proportions-child" style="padding-top: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
  </body>
</html>