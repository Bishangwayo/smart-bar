 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="dashboard.php" class="logo d-flex align-items-center">
             <img src="../assets/img/smartlogo.jpg" alt="">
             <span class="d-none d-lg-block">Smart-Bar</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->

     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

             <li class="nav-item dropdown pe-3">

                 <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                     <img src="../assets/img/undraw_profile_pic.png" alt="Profile" class="rounded-circle">
                     <span class="d-none d-md-block dropdown-toggle ps-2">
                         <?php if ($role == 1) {
                                echo $adminFirstName;
                            } elseif ($role == 2) {
                                echo $customersFirstName;
                            } else {
                                echo $customersFirstName;
                            }
                            ?>


                     </span>
                 </a><!-- End Profile Iamge Icon -->

                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                         <h6>
                             <?php
                                if ($role == 1) {
                                    echo $adminFirstName . " " . $adminLastName;
                                } elseif ($role == 2) {
                                    echo $customersFirstName . " " . $customersLastName;
                                } else {
                                    echo $customersFirstName . " " . $customersLastName;
                                }
                                ?>
                         </h6>
                         <span>
                             <?php
                                if ($role == 1) {
                                    echo 'Administrator';
                                } elseif ($role == 2) {
                                    echo 'Employee';
                                } else {
                                    echo 'Customer';
                                }
                                ?>
                         </span>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="userProfile.php">
                             <i class="bi bi-person"></i>
                             <span>My Profile</span>
                         </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="userProfile.php">
                             <i class="bi bi-gear"></i>
                             <span>Account Settings</span>
                         </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="#">
                             <i class="bi bi-question-circle"></i>
                             <span>Need Help?</span>
                         </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>

                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="../auth/logout.php">
                             <i class="bi bi-box-arrow-right"></i>
                             <span>Sign Out</span>
                         </a>
                     </li>

                 </ul><!-- End Profile Dropdown Items -->
             </li><!-- End Profile Nav -->

         </ul>
     </nav><!-- End Icons Navigation -->

 </header><!-- End Header -->