         <?php
              //Get the name of current page open in browser
                $head_nm=basename($_SERVER['PHP_SELF']); 
         ?>
         <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="Team .EXE logo" title="Team .EXE logo"> 
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="tooltip-show" data-toggle="tooltip" title="Team .EXE">Home</a></li>
                            <li><a href="about.php" class="tooltip-show" data-toggle="tooltip" title="About - Team .EXE">About</a></li>
                            <li><a href="contact.php" class="tooltip-show" data-toggle="tooltip" title="Contact - Team .EXE">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="fin.php" class="tooltip-show" data-toggle="tooltip" title="Final Year - Team .EXE">Final Year</a></li>
                                        <li><a href="members.php" class="tooltip-show" data-toggle="tooltip" title="Coordinators - Team .EXE">Coordinators</a></li>
                                        <li><a href="exec.php" class="tooltip-show" data-toggle="tooltip" title="Executives - Team .EXE">Executives</a></li>
                                        <li><a href="vol.php" class="tooltip-show" data-toggle="tooltip" title="Volunteers - Team .EXE">Volunteers</a></li>
                                        </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                            <li><a href="projects.php" class="tooltip-show" data-toggle="tooltip" title="View Projects by Team .EXE">Projects</a></li>
                            <li><a href="events.php" class="tooltip-show" data-toggle="tooltip" title="View Events by Team .EXE">Events</a></li>
                            <li><a href="workshops.php" class="tooltip-show" data-toggle="tooltip" title="View Events by Team .EXE">workshops</a></li>
                            <li><a href="http://exe.nith.ac.in/confess" class="tooltip-show" data-toggle="tooltip" title="NITH confessions - Team .EXE">NITH Confessions</a></li>
                            <li><a href="http://exe.nith.ac.in/paradox" class="tooltip-show" data-toggle="tooltip" title="Paradox - Team .EXE">Paradox</a></li>
                                </div>
                            </li>
                            

<?php 
include_once('user_session.php');
 
   if(!isset($_SESSION['login_user']))
   {
       echo '<li><a href="login.php" class="tooltip-show" data-toggle="tooltip" title="Sign In">Sign In</a></li>';
   }
   //if user session is set then redirecting user to profile
   else
   {
       echo '<li><a href="profile.php" class="tooltip-show" data-toggle="tooltip" title="Visit Profile">';
       echo $session_usr;
       echo '</a></li>'; 
       echo '<li><a href="logout.php" class="tooltip-show" data-toggle="tooltip" title="Logout">Logout</a>';
   }
?>
                            </li>
                        </ul>
                  </div>
                </nav>
            </div>
        </header>
<!-- Experimental, can be removed -->
<section class="global-page-header">
</section>
