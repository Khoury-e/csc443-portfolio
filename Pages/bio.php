<html>
  <?php 
    if(!isset($_SESSION['user'])) {
      echo "Must be logged in to access this page";
      die();
    }
  ?>
  <head>
    <link rel="stylesheet" href="../CSS/main-style.css" />
    <link rel="stylesheet" href="../CSS/custom-icons.css" />
    <link rel="stylesheet" href="../CSS/home.css"/>
    <title>Personal Profile: Elias Khoury</title>
  </head>
  <body>
    <div class="wrapper">
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
                <a href="../Pages/projects.php">Projects</a>
              </li>
              <li>
                <i class="ico cv-i"></i>
                <a href="../Pages/resume.php">Resume</a>
              </li>
              <li>
                <i class="ico overview-i"></i>
                <a href="../Pages/contact.html">Contact Me</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="end">
          <div class="welcome">
            <span>
              <?php 
                echo "Welcome, ".$_SESSION['user']."!";
              ?>
            </span>
          </div>
          <div class="logout">  
            <span><a href="../Backend/logout.php"><i class='ico logout-i'></i></a></span>
          </div>
        </div>
      </div>
      <div id="content">
        <div id="left-side">
          <div class="image-container">
            <a href="../Images/Pers Photo.jpg"
              ><img src="../Images/Pers Photo.jpg" alt="profile-photo"
            /></a>
          </div>
        </div>

        <div id="right-side">
          <div class="overview">
            <h1>Overview</h1>
            <p>
              Senior computer science student at the Lebanese American
              University. Experienced in web development after achieving 2
              internships in this field. I am intrested in cybersecurity also. I
              love technology and programming so I decided to go into software
              engineering and working in web development. I am currently in the
              process of learning MERN stack, as well as Flutter to build mobile
              apps and learning web penetration testing to tackle modern
              security issues in web apps and learn how to build secure web
              apps.
            </p>
          </div>
        </div>
      </div>
    </div>

    <script>
      function logout() {
       
      }
    </script>
  </body>
</html>
