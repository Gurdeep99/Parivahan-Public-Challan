   <!--**********************************
            Nav header start
        ***********************************-->
   <div class="nav-header">
       <a href="index.php" class="brand-logo">
           <img class="logo-abbr" src="./images/logo.png" alt="">
           <img class="logo-compact" src="./images/logo-text.png" alt="">
           <img class="brand-title" src="./images/logo-text.png" alt="">
       </a>

       <div class="nav-control">
           <div class="hamburger">
               <span class="line"></span><span class="line"></span><span class="line"></span>
           </div>
       </div>
   </div>
   <!--**********************************
            Nav header end
        ***********************************-->

   <!--**********************************
            Header start
        ***********************************-->
   <div class="header">
       <div class="header-content">
           <nav class="navbar navbar-expand">
               <div class="collapse navbar-collapse justify-content-between">
                   <div class="header-left">
                       <div class="search_bar dropdown">
                           <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                               <i class="mdi mdi-magnify"></i>
                           </span>
                           <div class="dropdown-menu p-0 m-0">
                               <form>
                                   <input class="form-control" type="search" placeholder="Search" aria-label="Search">


                               </form>
                           </div>
                       </div>
                   </div>








                   <ul class="navbar-nav header-right">
                       <li class="nav-item dropdown notification_dropdown">
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <label class="input-group-text">Current Zone</label>
                               </div>
                               <select class="custom-select">
                                   <option selected="">Choose...</option>
                                   <option value="greater_noida">Greater Noida</option>
                                   <option value="greater_noida_west">Greater Noida West</option>
                                   <option value="ghaziabad">Ghaziabad</option>
                                   <option value="muradnagar">Muradnagar</option>
                                   <option value="modinagar">Modinagar</option>
                                   <option value="meerut">Meerut</option>
                               </select>
                           </div>
                       </li>



                       <li class="nav-item dropdown notification_dropdown">
                           <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                               <i class="mdi mdi-bell"></i>
                               <div class="pulse-css"></div>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                               <ul class="list-unstyled">
                                   <li class="media dropdown-item">
                                       <span class="success"><i class="ti-user"></i></span>
                                       <div class="media-body">
                                           <a href="#">
                                               <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                               </p>
                                           </a>
                                       </div>
                                       <span class="notify-time">3:20 am</span>
                                   </li>

                               </ul>
                               <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                           </div>
                       </li>
                       <li class="nav-item dropdown header-profile">
                           <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                               <i class="mdi mdi-account"></i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                               <a href="./app-profile.php" class="dropdown-item">
                                   <i class="icon-user"></i>
                                   <span class="ml-2">Profile </span>
                               </a>
                               <a href="./email-inbox.php" class="dropdown-item">
                                   <i class="icon-envelope-open"></i>
                                   <span class="ml-2">Inbox </span>
                               </a>
                               <a href="./page-login.php" class="dropdown-item">
                                   <i class="icon-key"></i>
                                   <span class="ml-2">Logout </span>
                               </a>
                           </div>
                       </li>
                   </ul>
               </div>
           </nav>
       </div>
   </div>
   <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

   <!--**********************************
            Sidebar start
        ***********************************-->
   <div class="quixnav">
       <div class="quixnav-scroll">
           <ul class="metismenu" id="menu">


               <li>
                   <a href="./index.php" aria-expanded="false">
                       <i class="icon icon-single-04"></i>
                       <span class="nav-text">Dashboard</span>
                   </a>
               </li>
               <li class="nav-label">Challans</li>
               <li><a href="unreaded.php" aria-expanded="false"><i class="icon icon-globe-2"></i><span class="nav-text">Unreaded</span></a></li>
               <li><a href="readed.php" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Accepted</span></a></li>
               <li><a href="declined.php" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Denied</span></a></li>

              
               <li class="nav-label">Apps</li>
               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                   <ul aria-expanded="false">
                       <li><a href="./app-profile.php">Profile</a></li>
                       <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                           <ul aria-expanded="false">
                               <li><a href="./email-compose.php">Compose</a></li>
                               <li><a href="./email-inbox.php">Inbox</a></li>
                               <li><a href="./email-read.php">Read</a></li>
                           </ul>
                       </li>
                       <li><a href="./app-calender.php">Calendar</a></li>
                   </ul>
               </li>
               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                   <ul aria-expanded="false">
                       <li><a href="./chart-flot.php">Flot</a></li>
                       <li><a href="./chart-morris.php">Morris</a></li>
                       <li><a href="./chart-chartjs.php">Chartjs</a></li>
                       <li><a href="./chart-chartist.php">Chartist</a></li>
                       <li><a href="./chart-sparkline.php">Sparkline</a></li>
                       <li><a href="./chart-peity.php">Peity</a></li>
                   </ul>
               </li>
               <li class="nav-label">Components</li>
               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                   <ul aria-expanded="false">
                       <li><a href="./ui-accordion.php">Accordion</a></li>
                       <li><a href="./ui-alert.php">Alert</a></li>
                       <li><a href="./ui-badge.php">Badge</a></li>
                       <li><a href="./ui-button.php">Button</a></li>
                       <li><a href="./ui-modal.php">Modal</a></li>
                       <li><a href="./ui-button-group.php">Button Group</a></li>
                       <li><a href="./ui-list-group.php">List Group</a></li>
                       <li><a href="./ui-media-object.php">Media Object</a></li>
                       <li><a href="./ui-card.php">Cards</a></li>
                       <li><a href="./ui-carousel.php">Carousel</a></li>
                       <li><a href="./ui-dropdown.php">Dropdown</a></li>
                       <li><a href="./ui-popover.php">Popover</a></li>
                       <li><a href="./ui-progressbar.php">Progressbar</a></li>
                       <li><a href="./ui-tab.php">Tab</a></li>
                       <li><a href="./ui-typography.php">Typography</a></li>
                       <li><a href="./ui-pagination.php">Pagination</a></li>
                       <li><a href="./ui-grid.php">Grid</a></li>

                   </ul>
               </li>

               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                   <ul aria-expanded="false">
                       <li><a href="./uc-select2.php">Select 2</a></li>
                       <li><a href="./uc-nestable.php">Nestedable</a></li>
                       <li><a href="./uc-noui-slider.php">Noui Slider</a></li>
                       <li><a href="./uc-sweetalert.php">Sweet Alert</a></li>
                       <li><a href="./uc-toastr.php">Toastr</a></li>
                       <li><a href="./map-jqvmap.php">Jqv Map</a></li>
                   </ul>
               </li>
               <li><a href="widget-basic.php" aria-expanded="false"><i class="icon icon-globe-2"></i><span class="nav-text">Widget</span></a></li>
               <li class="nav-label">Forms</li>
               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                   <ul aria-expanded="false">
                       <li><a href="./form-element.php">Form Elements</a></li>
                       <li><a href="./form-wizard.php">Wizard</a></li>
                       <li><a href="./form-editor-summernote.php">Summernote</a></li>
                       <li><a href="form-pickers.php">Pickers</a></li>
                       <li><a href="form-validation-jquery.php">Jquery Validate</a></li>
                   </ul>
               </li>
               <li class="nav-label">Table</li>
               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                   <ul aria-expanded="false">
                       <li><a href="table-bootstrap-basic.php">Bootstrap</a></li>
                       <li><a href="table-datatable-basic.php">Datatable</a></li>
                   </ul>
               </li>

               <li class="nav-label">Extra</li>
               <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                   <ul aria-expanded="false">
                       <li><a href="./page-register.php">Register</a></li>
                       <li><a href="./page-login.php">Login</a></li>
                       <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                           <ul aria-expanded="false">
                               <li><a href="./page-error-400.php">Error 400</a></li>
                               <li><a href="./page-error-403.php">Error 403</a></li>
                               <li><a href="./page-error-404.php">Error 404</a></li>
                               <li><a href="./page-error-500.php">Error 500</a></li>
                               <li><a href="./page-error-503.php">Error 503</a></li>
                           </ul>
                       </li>
                       <li><a href="./page-lock-screen.php">Lock Screen</a></li>
                   </ul>
               </li>
           </ul>
       </div>


   </div>
   <!--**********************************
            Sidebar end
        ***********************************-->