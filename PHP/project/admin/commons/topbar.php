 <!-- Topbar -->
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

     <!-- Sidebar Toggle (Topbar) -->
     <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
     </button>


     <!-- Topbar Navbar -->
     <ul class="navbar-nav ml-auto">

         <!-- Nav Item - Alerts -->
         <li class="nav-item dropdown no-arrow mx-1">
             <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-bell fa-fw"></i>
                 <!-- Counter - Alerts -->
                 <span class="badge badge-danger badge-counter">3</span>
             </a>
             <!-- Dropdown - Alerts -->
             <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                 <h6 class="dropdown-header">
                     Alerts Center
                 </h6> 
                 <a class="dropdown-item d-flex align-items-center" href="#">
                     <div class="mr-3">
                         <div class="icon-circle bg-warning">
                             <i class="fas fa-exclamation-triangle text-white"></i>
                         </div>
                     </div>
                     <div>
                         <div class="small text-gray-500">December 2, 2019</div>
                         Spending Alert: We've noticed unusually high spending for your account.
                     </div>
                 </a>
                 <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
             </div>
         </li>

         <!-- Nav Item - Messages -->
         <li class="nav-item dropdown no-arrow mx-1">
             <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-envelope fa-fw"></i>
                 <!-- Counter - Messages -->
                 <span class="badge badge-danger badge-counter">7</span>
             </a>
             <!-- Dropdown - Messages -->
             <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                 <h6 class="dropdown-header">
                     Message Center
                 </h6>                 
                 <a class="dropdown-item d-flex align-items-center" href="#">
                     <div>
                         <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                             told me that people say this to all dogs, even if they aren't good...</div>
                         <div class="small text-gray-500">Chicken the Dog · 2w</div>
                     </div>
                 </a>
                 <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
             </div>
         </li>

         <div class="topbar-divider d-none d-sm-block"></div>

         <!-- Nav Item - User Information -->
         <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                 <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="#">
                     <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                     Profile
                 </a>
                 <a class="dropdown-item" href="#">
                     <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                     Settings
                 </a>
                 <a class="dropdown-item" href="#">
                     <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                     Activity Log
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Logout
                 </a>
             </div>
         </li>

     </ul>

 </nav>
 <!-- End of Topbar -->

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="login.html">Logout</a>
             </div>
         </div>
     </div>
 </div>