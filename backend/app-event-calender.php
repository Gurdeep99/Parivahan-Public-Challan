<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Calendar</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/calendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <div class="logo"><a href="index.php"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
          <ul>
            <li class="label">Main</li>
            <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary">2</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="index.php">Dashboard 1</a></li>
                <li><a href="index1.php">Dashboard 2</a></li>
                
                
                
              </ul>
            </li>

            <li class="label">Apps</li>
            <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Charts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="chart-flot.php">Flot</a></li>
                <li><a href="chart-morris.php">Morris</a></li>
                <li><a href="chartjs.php">Chartjs</a></li>
                <li><a href="chartist.php">Chartist</a></li>
                <li><a href="chart-peity.php">Peity</a></li>
                <li><a href="chart-sparkline.php">Sparkle</a></li>
                <li><a href="chart-knob.php">Knob</a></li>
              </ul>
            </li>
            <li><a href="app-event-calender.php"><i class="ti-calendar"></i> Calender </a></li>
            <li><a href="app-email.php"><i class="ti-email"></i> Email</a></li>
            <li><a href="app-profile.php"><i class="ti-user"></i> Profile</a></li>
            <li><a href="app-widget-card.php"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
            <li class="label">Features</li>
            <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="ui-typography.php">Typography</a></li>
                <li><a href="ui-alerts.php">Alerts</a></li>

                <li><a href="ui-button.php">Button</a></li>
                <li><a href="ui-dropdown.php">Dropdown</a></li>

                <li><a href="ui-list-group.php">List Group</a></li>

                <li><a href="ui-progressbar.php">Progressbar</a></li>
                <li><a href="ui-tab.php">Tab</a></li>

              </ul>
            </li>
            <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Components <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="uc-calendar.php">Calendar</a></li>
                <li><a href="uc-carousel.php">Carousel</a></li>
                <li><a href="uc-weather.php">Weather</a></li>
                <li><a href="uc-datamap.php">Datamap</a></li>
                <li><a href="uc-todo-list.php">To do</a></li>
                <li><a href="uc-scrollable.php">Scrollable</a></li>
                <li><a href="uc-sweetalert.php">Sweet Alert</a></li>
                <li><a href="uc-toastr.php">Toastr</a></li>
                <li><a href="uc-range-slider-basic.php">Basic Range Slider</a></li>
                <li><a href="uc-range-slider-advance.php">Advance Range Slider</a></li>
                <li><a href="uc-nestable.php">Nestable</a></li>

                <li><a href="uc-rating-bar-rating.php">Bar Rating</a></li>
                <li><a href="uc-rating-jRate.php">jRate</a></li>
              </ul>
            </li>
            <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="table-basic.php">Basic</a></li>

                <li><a href="table-export.php">Datatable Export</a></li>
                <li><a href="table-row-select.php">Datatable Row Select</a></li>
                <li><a href="table-jsgrid.php">Editable </a></li>
              </ul>
            </li>
            <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="font-themify.php">Themify</a></li>
              </ul>
            </li>
            <li><a class="sidebar-sub-toggle"><i class="ti-map"></i> Maps <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="gmaps.php">Basic</a></li>
                <li><a href="vector-map.php">Vector Map</a></li>
              </ul>
            </li>
            <li class="label">Form</li>
            <li><a href="form-basic.php"><i class="ti-view-list-alt"></i> Basic Form </a></li>
            <li class="label">Extra</li>
            <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="invoice.php">Basic</a></li>
                <li><a href="invoice-editable.php">Editable</a></li>
              </ul>
            </li>
            <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
              <ul>
                <li><a href="page-login.php">Login</a></li>
                <li><a href="page-register.php">Register</a></li>
                <li><a href="page-reset-password.php">Forgot password</a></li>
              </ul>
            </li>
            <li><a href="../documentation/index.php"><i class="ti-file"></i> Documentation</a></li>
            <li><a><i class="ti-close"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left">
              <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <div class="float-right">
              <ul>

                <li class="header-icon dib"><i class="ti-bell"></i>
                  <div class="drop-down">
                    <div class="dropdown-content-heading">
                      <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                      <ul>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li class="text-center">
                          <a href="#" class="more-link">See All</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                  <div class="drop-down">
                    <div class="dropdown-content-heading">
                      <span class="text-left">2 New Messages</span>
                      <a href="email.php"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                      <ul>
                        <li class="notification-unread">
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li class="notification-unread">
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li>
                          <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                        </li>
                        <li class="text-center">
                          <a href="#" class="more-link">See All</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span>
                  <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-heading">
                      <span class="text-left">Upgrade Now</span>
                      <p class="trial-day">30 Days Trail</p>
                    </div>
                    <div class="dropdown-content-body">
                      <ul>
                        <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                        <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                        <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>

                        <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                        <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, <span>Welcome Here</span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">App-Event-Calender</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                    <h4>Calendar</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3">
                        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect waves-light">
                                                <i class="fa fa-plus"></i> Create New
                                            </a>
                        <div id="external-events" class="m-t-20">
                          <br>
                          <p>Drag and drop your event or click in the calendar</p>
                          <div class="external-event bg-primary" data-class="bg-primary">
                            <i class="fa fa-move"></i>New Theme Release
                          </div>
                          <div class="external-event bg-pink" data-class="bg-pink">
                            <i class="fa fa-move"></i>My Event
                          </div>
                          <div class="external-event bg-warning" data-class="bg-warning">
                            <i class="fa fa-move"></i>Meet manager
                          </div>
                          <div class="external-event bg-dark" data-class="bg-dark">
                            <i class="fa fa-move"></i>Create New theme
                          </div>
                        </div>

                        <!-- checkbox -->
                        <div class="checkbox m-t-40">
                          <input id="drop-remove" type="checkbox">
                          <label for="drop-remove">
													Remove after drop
												</label>
                        </div>

                      </div>
                      <div class="col-md-9">
                        <div class="card-box">
                          <div id="calendar"></div>
                        </div>
                      </div>
                      <!-- end col -->
                      <!-- BEGIN MODAL -->
                      <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                              <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal Add Category -->
                      <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                  </div>
                                  <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
																<option value="success">Success</option>
																<option value="danger">Danger</option>
																<option value="info">Info</option>
																<option value="pink">Pink</option>
																<option value="primary">Primary</option>
																<option value="warning">Warning</option>
															</select>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END MODAL -->
                    </div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>




    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js">
      

    </script>
    <!-- bootstrap -->



    <script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar-init.js"></script>

    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
  </body>

</html>
