<?php
    include_once "base.php";
    $verif=$base->prepare("SELECT * FROM membre ORDER BY idM DESC");
    $verif->execute();
    $req=$verif->fetchAll();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>tableau de bord admin</title>
    <link rel="stylesheet" href="css_admin/style.css">
    <style>
      .logo img
      {
        width: 80px;
        height: auto;
      }
    </style>

  </head>
  <body class="app">
    <!-- @TOC -->
    <!-- =================================================== -->
    <!--
      + @Page Loader
      + @App Content
          - #Left Sidebar
              > $Sidebar Header
              > $Sidebar Menu

          - #Main
              > $Topbar
              > $App Screen Content
    -->

    <!-- @Page Loader -->
    <!-- =================================================== -->
    <div id='loader'>
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>

    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
      <!-- #Left Sidebar ==================== -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="index.html">
                  <div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="assets/img/logo.png" alt="">
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">Admin</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="index.php">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Tableau de bord</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="email.php">
                <span class="icon-holder">
                  <i class="c-brown-500 ti-email"></i>
                </span>
                <span class="title">Email</span>
              </a>
            </li>
          
            <li class="nav-item">
              <a class='sidebar-link' href="calendar.php">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                <span class="title">Calendrier</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="chat.php">
                <span class="icon-holder">
                  <i class="c-deep-purple-500 ti-comment-alt"></i>
                </span>
                <span class="title">Chat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="charts.php">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                <span class="title">Charts</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
        <div class="header navbar">
          <div class="header-container">
            <ul class="nav-left">
              <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                  <i class="ti-menu"></i>
                </a>
              </li>
              <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                  <i class="search-icon ti-search pdd-right-10"></i>
                  <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
              </li>
              <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
              </li>
            </ul>
            <ul class="nav-right">
              <li class="notifications dropdown">
                <span class="counter bgc-red">3</span>
                <a href="" class="dropdown-toggle no-after" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="ti-bell"></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
                  <li class="pX-20 pY-15 bdB">
                    <i class="ti-bell pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                  </li>
                  <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">H.Tommy</span>
                              <span class="c-grey-600">liked your <span class="text-dark">post</span>
                              </span>
                            </span>
                            <p class="m-0">
                              <small class="fsz-xs">5 mins ago</small>
                            </p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Moo Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">cover image</span>
                              </span>
                            </span>
                            <p class="m-0">
                              <small class="fsz-xs">7 mins ago</small>
                            </p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Lee Doe</span>
                              <span class="c-grey-600">commented on your <span class="text-dark">video</span>
                              </span>
                            </span>
                            <p class="m-0">
                              <small class="fsz-xs">10 mins ago</small>
                            </p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a>
                    </span>
                  </li>
                </ul>
              </li>
              <li class="notifications dropdown">
                <span class="counter bgc-blue">3</span>
                <a href="" class="dropdown-toggle no-after" data-bs-toggle="dropdown">
                  <i class="ti-email"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="pX-20 pY-15 bdB">
                    <i class="ti-email pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                  </li>
                  <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">John Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">5 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Moo Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">15 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                          <div class="peer mR-15">
                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Lee Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">25 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-bs-toggle="dropdown">
                  <div class="peer mR-10">
                    <img class="w-2r bdrs-50p" src="assets/img/admin.png" alt="">
                  </div>
                  <div class="peer">
                    <span class="fsz-sm c-grey-900">H Tommy</span>
                  </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-settings mR-10"></i>
                      <span>Setting</span>
                    </a>
                  </li>
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-user mR-10"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-email mR-10"></i>
                      <span>Messages</span>
                    </a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-power-off mR-10"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item  w-100">
                <div class="row gap-20">
                  <!-- #Toatl Visits ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Nombre total de visiteurs</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Total Page Views ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Nombre total vues du pages </h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash2"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">90%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Unique Visitors ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">visiteurs réguliers</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                <!-- #Site Visits ==================== -->
                <div class="bd bgc-white">
                  <div class="peers fxw-nw@lg+ ai-s">
                    <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                      <div class="layers">
                        <div class="layer w-100 mB-10">
                          <h6 class="lh-1">Map Touristique</h6>
                        </div>
                        <div class="layer w-100">
                          <div id="world-map-marker"><img src="assets/img/map_tou.jpg" alt=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                      <div class="layers">
                        <div class="layer w-100">
                          <!-- Progress Bars -->
                          <div class="layers">
                            <div class="layer w-100">
                              <h5 class="mB-5">100k</h5>
                              <small class="fw-600 c-grey-700">Visiteurs des États-Unis</small>
                              <span class="pull-right c-grey-600 fsz-sm">50%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-deep-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="visually-hidden">50% Complete</span></div>
                              </div>
                            </div>
                            <div class="layer w-100 mT-15">
                              <h5 class="mB-5">1M</h5>
                              <small class="fw-600 c-grey-700">Visiteurs d'Europe</small>
                              <span class="pull-right c-grey-600 fsz-sm">80%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="visually-hidden">80% Complete</span></div>
                              </div>
                            </div>
                            <div class="layer w-100 mT-15">
                              <h5 class="mB-5">450k</h5>
                              <small class="fw-600 c-grey-700"> Visiteurs d'Australie</small>
                              <span class="pull-right c-grey-600 fsz-sm">40%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-light-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="visually-hidden">40% Complete</span></div>
                              </div>
                            </div>
                            <div class="layer w-100 mT-15">
                              <h5 class="mB-5">1B</h5>
                              <small class="fw-600 c-grey-700">Visiteurs de l'Inde</small>
                              <span class="pull-right c-grey-600 fsz-sm">90%</span>
                              <div class="progress mT-10">
                                <div class="progress-bar bgc-blue-grey-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="visually-hidden">90% Complete</span></div>
                              </div>
                            </div>
                          </div>

                      <div class="table-responsive p-20">
                        <table class="table">
                          <h3>Les réservation</h3>
                          <thead>
                            <tr>
                              <th class=" bdwT-0">Phone</th>
                              <th class=" bdwT-0">Prenom</th>
                              <th class=" bdwT-0">Nom</th>
                              <th class=" bdwT-0">Date de départ</th>
                              <th class=" bdwT-0">Date de retour</th>
                              <th class=" bdwT-0">Adultes</th>
                              <th class=" bdwT-0">Enfant </th>
                              <th class=" bdwT-0">Email</th>

                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach($req as $reserv): ?>
                            <tr>
                            
                              <td class="fw-600"> <?= $reserv["phone"] ?></td>
                              <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill"> <?= $reserv["prenom"] ?>	</span> </td>
                              <td> <?= $reserv["nom"] ?></td>
                              <td><span class="text-success"> <?= $reserv["depart"] ?></span></td>
                              <td><span class="text-success"><?= $reserv["retour"] ?></span></td>
                              <td><span class="text-success"><?= $reserv["adultes"] ?></span></td>
                              <td><span class="text-success"><?= $reserv["enfant"] ?></span></td>
                              <td><span class="text-success"><?= $reserv["email"] ?></span></td>
                              
                            </tr>
                            <?php endforeach; ?> 
                            <tr>
                              
                            </tr>
                          </tbody>
                        </table>
                       </div>
                    </div>
                  </div>
                  <div class="ta-c bdT w-100 p-20">
                    <a href="#">Check all the sales</a>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
               
                <!-- #Chat ==================== -->
                <div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 p-20">
                      <h6 class="lh-1">Message du client</h6>
                    </div>
                    <div class="layer w-100">
                      <!-- Chat Box -->
                      <div class="bgc-grey-200 p-20 gapY-15">
                        <!-- Chat Conversation -->
                        <div class="peers fxw-nw">
                          <div class="peer mR-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/11.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div class="layers ai-fs gapY-5">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Lorem Ipsum is simply dummy text of</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>the printing and typesetting industry.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Lorem Ipsum has been the industry's</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Chat Conversation -->
                        <div class="peers fxw-nw ai-fe">
                          <div class="peer ord-1 mL-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
                          </div>
                          <div class="peer peer-greed ord-0">
                            <div class="layers ai-fe gapY-10">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>Heloo</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>??</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Chat Send -->
                      <div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                          <input type="text" class="form-control bdrs-10em m-0" placeholder="Say something...">
                          <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

      </div>
    </div>
  </body>
</html>
