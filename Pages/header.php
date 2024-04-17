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
          <a href="../Pages/contact.php">Contact Me</a>
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
      <span><a href="../Backend/logout.php"><i class="ico logout-i"></i></a></span>
    </div>
  </div>
</div>
