<html>

<head>
    <link rel="stylesheet" href="../CSS/main-style.css">
    <link rel="stylesheet" href="../CSS/projects-style.css">
    <link rel="stylesheet" href="../CSS/custom-icons.css">
    <title>Personal Profile: Elias Khoury</title>
</head>
<body>
    <div class="header">
        <div class="menu">
            <span><i class="ico burger-menu-i"></i>Menu</span>
            <div class="menu-content">
                <ul>
                    <li>
                        <i class="ico overview-i"></i>
                        <a href="../Pages/bio.php">Overview</a>
                    </li>
                    <li>
                        <i class="ico proj-i"></i>
                        <a href="../Pages/projects.html">Projects</a>
                    </li>
                    <li>
                        <i class="ico cv-i"></i>
                        <a href="../Pages/resume.php">Resume</a>
                    </li>
                    <li>
                        <i class="ico overview-i"></i>
                        <a href="../Pages/contact.php">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="end">
            <div class="welcome">
              <span>
                <?php 
                  session_start();
                  echo "Welcome, ".$_SESSION['user']."!";
                ?>
              </span>
            </div>
            <div class="logout">  
              <span><a href="../Backend/logout.php"><i class='ico logout-i'></i></a></span>
            </div>
          </div>
        </div>
    </div>
    <div class="content">
        <div class="projects">
                <div class="left" id="proj1">
                    <div class="individual-project">
                        <div class="thumbnail">
                            <img src="../Images/Projects/Burger Blast/logo_transparent.png" alt="logo">
                        </div>    
                        <div class="project-info">
                            <h3>Burger Blast</h3>
                            <p>Type: Mobile App</p>
                        </div>
                        <div class="link-to-project">
                            <a href="../Pages/projects/burger-blast.php">More Details</a>
                        </div>
                    </div>
                </div>

               <div class="left" id="proj2">
                    <div class="individual-project">
                        <div class="thumbnail">
                            <img src="../Images/Projects/QRGen/QRCode.png" alt="QR">
                        </div>
                        <div class="project-info">
                            <h3>QR generator</h3>
                            <p>Type: Client-Server App</p>
                        </div>
                        <div class="link-to-project">
                            <a href="../Pages/projects/qr-generator.html">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="left" id="proj3">
                    <div class="individual-project">
                        <div class="thumbnail">
                            <img src="../Images/Projects/Moviebox/logo.jpg" alt="QR">
                        </div>
                        <div class="project-info">
                            <h3>Moviebox</h3>
                            <p>Type: Web App</p>
                        </div>
                        <div class="link-to-project">
                            <a href="../Pages/projects/Moviebox.html">More Details</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>