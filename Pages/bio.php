<html>
  <?php 
    session_start();
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
      <?php 
        include('header.php');
      ?>
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
  </body>
</html>
