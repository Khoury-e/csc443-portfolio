<html>
    <?php 
        session_start();
        if(!isset($_SESSION['user'])) {
        echo "Must be logged in to access this page";
        die();
        }
    ?>
<head>
    <link rel="stylesheet" href="../../CSS/main-style.css">
    <link rel="stylesheet" href="../../CSS/gallery.css">
    <link rel="stylesheet" href="../../CSS/custom-icons.css">
    <title>
        Moviebox
    </title>
</head>
<style>
    h1 {
        text-align: center;
    }

    h3 {
        text-decoration: underline;
    }

    a {
        color: black;
        text-decoration: none;
    }

    .description {
        margin-bottom: 40px;
    }

    .gallery {
        display: inline-block;
        border: 1px solid black;
        height: 300px;
        width: 1200px;
        padding-left: 40px;
    }
</style>
<body>
    <div class="header">
        <div class="menu">
            <span><i class="ico burger-menu-i"></i>Menu</span>
            <div class="menu-content">
                <ul>
                    <li>
                        <i class="ico overview-i"></i>
                        <a href="../bio.php">Overview</a>
                    </li>
                    <li>
                        <i class="ico proj-i"></i>
                        <a href="../projects.php">Projects</a>
                    </li>
                    <li>
                        <i class="ico cv-i"></i>
                        <a href="../resume.php">Resume</a>
                    </li>
                    <li>
                        <i class="ico overview-i"></i>
                        <a href="../contact.php">Contact Me</a>
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
                <span><a href="../../Backend/logout.php"><i class='ico logout-i'></i></a></span>
            </div>
        </div>
    </div>

    <div class="content">
        <h1>Moviebox: website for a cinema</h1>

        <div class="gallery">
                <?php 
                    $file = fopen("MovieBox.txt", "r");
                    if ($file) {
                        while (($line = fgets($file)) !== false) {
                            echo "<div class='outer-image-frame'>";
                            echo "<div class='image-frame'>";
                            echo "<a href='".$line."'>";
                            echo "<img src='".$line."'>";
                            echo "</a>";
                            echo "</div>";
                            echo "</div>";
                        }

                        fclose($file);
                    }
                    
                ?>
        </div>

        <div class="description">
            <h3>Description:</h3>
            <p>A website, built with html, css, js, php, mysql. The website let users select a movie of their choice and
                book seats and pay online for their movies. this includes a signup and login mechanisms, as well as
                contacting IT feature, selecting seat feature and many more.</p>

            <h3>Collaborator(s):</h3>
            <ul>
                <li>Sema Shehade</li>
                <li>Sara El Baba</li>
                <li>Razan Hajjar</li>
                <li>Majd Hilal</li>
            </ul>
            <h3>Technology(ies):</h3>
            <ul>
                <li>HTML
                <li>JS</li>    
                <li>CSS</li>
                <li>Php</li>
                <li>MySQL</li>
            </ul>
        </div>
    </div>
</body>
</html>