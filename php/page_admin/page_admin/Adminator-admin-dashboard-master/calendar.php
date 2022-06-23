<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calendrier</title>
    <link rel="stylesheet" href="css_admin/style.css">
    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }



      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
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
              <a class='sidebar-link' href="charts.html">
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
                <a href="" class="dropdown-toggle no-after" data-bs-toggle="dropdown">
                  <i class="ti-bell"></i>
                </a>

                <ul class="dropdown-menu">
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
                              <span class="fw-500">John Doe</span>
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
                    <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                  </div>
                  <div class="peer">
                    <span class="fsz-sm c-grey-900">John Doe</span>
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
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <div class="bdrs-3 ov-h bgc-white bd">
                    <div class="bgc-deep-purple-500 ta-c p-30">
                      <h1 class="fw-300 mB-5 lh-1 c-white">01<span class="fsz-def">st</span></h1>
                      <h3 class="c-white">Monday</h3>
                    </div>
                    <div class="pos-r">
                      <button type="button" class="mT-nv-50 pos-a r-10 t-2 btn cur-p bdrs-50p p-0 w-3r h-3r btn-warning">
                        <i class="ti-plus"></i>
                      </button>
                      <ul class="m-0 p-0 mT-20">
                        <li class="bdB peers ai-c jc-sb fxw-nw">
                          <a class="td-n p-20 peers fxw-nw me-20 peer-greed c-grey-900" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#calendar-edit">
                            <div class="peer mR-15">
                              <i class="fa fa-fw fa-clock-o c-red-500"></i>
                            </div>
                            <div class="peer">
                              <span class="fw-600">All Day Event</span>
                              <div class="c-grey-600">
                                <span class="c-grey-700">Nov 01 - </span>
                                <i>Website Development</i>
                              </div>
                            </div>
                          </a>
                          <div class="peers mR-15">
                            <div class="peer">
                              <a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-pencil"></i>
                              </a>
                            </div>
                            <div class="peer">
                              <a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-trash"></i>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="bdB peers ai-c jc-sb fxw-nw">
                          <a class="td-n p-20 peers fxw-nw me-20 peer-greed c-grey-900" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#calendar-edit">
                            <div class="peer mR-15">
                              <i class="fa fa-fw fa-clock-o c-blue-500"></i>
                            </div>
                            <div class="peer">
                              <span class="fw-600">All Day Event</span>
                              <div class="c-grey-600">
                                <span class="c-grey-700">Nov 01 - </span>
                                <i>Website Development</i>
                              </div>
                            </div>
                          </a>
                          <div class="peers mR-15">
                            <div class="peer">
                              <a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-pencil"></i>
                              </a>
                            </div>
                            <div class="peer">
                              <a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-trash"></i>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="bdB peers ai-c jc-sb fxw-nw">
                          <a class="td-n p-20 peers fxw-nw mR-20 peer-greed c-grey-900" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#calendar-edit">
                            <div class="peer mR-15">
                              <i class="fa fa-fw fa-clock-o c-indigo-500"></i>
                            </div>
                            <div class="peer">
                              <span class="fw-600">All Day Event</span>
                              <div class="c-grey-600">
                                <span class="c-grey-700">Nov 01 - </span>
                                <i>Website Development</i>
                              </div>
                            </div>
                          </a>
                          <div class="peers mR-15">
                            <div class="peer">
                              <a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-pencil"></i>
                              </a>
                            </div>
                            <div class="peer">
                              <a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-trash"></i>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="bdB peers ai-c jc-sb fxw-nw">
                          <a class="td-n p-20 peers fxw-nw mR-20 peer-greed c-grey-900" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#calendar-edit">
                            <div class="peer mR-15">
                              <i class="fa fa-fw fa-clock-o c-green-500"></i>
                            </div>
                            <div class="peer">
                              <span class="fw-600">All Day Event</span>
                              <div class="c-grey-600">
                                <span class="c-grey-700">Nov 01 - </span>
                                <i>Website Development</i>
                              </div>
                            </div>
                          </a>
                          <div class="peers mR-15">
                            <div class="peer">
                              <a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-pencil"></i>
                              </a>
                            </div>
                            <div class="peer">
                              <a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5">
                                <i class="ti-trash"></i>
                              </a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div id='calendar'></div>
                </div>
              </div>
              <div class="modal fade" id="calendar-edit">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="bd p-15">
                      <h5 class="m-0">Add Event</h5>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label fw-500">Event title</label>
                          <input class="form-control bdc-grey-200">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label class="fw-500 form-label">Start</label>
                            <div class="timepicker-input input-icon mb-3">
                              <div class="input-group">
                                <div class="input-group-text bgc-white bd bdwR-0">
                                  <i class="ti-calendar"></i>
                                </div>
                                <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Datepicker" data-provide="datepicker">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label class="fw-500 form-label">End</label>
                            <div class="timepicker-input input-icon mb-3">
                              <div class="input-group">
                                <div class="input-group-text bgc-white bd bdwR-0">
                                  <i class="ti-calendar"></i>
                                </div>
                                <input type="text" class="form-control bdc-grey-200 end-date" placeholder="Datepicker" data-provide="datepicker">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="fw-500 form-label">Event title</label>
                          <textarea class="form-control bdc-grey-200" rows='5'></textarea>
                        </div>
                        <div class="text-end">
                          <button class="btn btn-primary cur-p btn-color" data-dismiss="modal">Done</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- ### $App Screen Footer ### -->
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
          <span>Copyright © 2021 Designed by <a href="https://colorlib.com" target='_blank' title="Colorlib">Colorlib</a>. All rights reserved.</span>
        </footer>
      </div>
    </div>
  </body>
</html>
