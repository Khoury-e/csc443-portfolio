<html>

<head>
    <link rel="stylesheet" href="../../CSS/main-style.css">
    <link rel="stylesheet" href="../../CSS/gallery.css">
    <link rel="stylesheet" href="../../CSS/custom-icons.css">
    <title>
        Burger Blast
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

    .gallery {
        display: inline-block;
        margin-bottom: 20px;
        border: 1px solid black;
        height: 20%;
        width: 80%;
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
    </div>

    <div class="content">
        <h1>Burger Blast</h1>

        <div class="gallery">
                <?php 
                    $file = fopen("BurgerBlast.txt", "r");
                    if ($file) {
                        while (($line = fgets($file)) !== false) {
                            echo "<div class='outer-image-frame-mobile'>";
                            echo "<div class='image-frame-mobile'>";
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
            <p>Front end design and developement of a cross-platform mobile application for a burger restaurant. The app
                guides you to a menu of the best burgers along with their ingredients, where user can select and
                unselect any ingredients they wish to remove (or add).</p>

            <h3>Collaborator(s):</h3>
            <ul>
                <li>Lynn Salame</li>
            </ul>
            <h3>Technology(ies):</h3>
            <ul>
                <li>Flutter</li>
            </ul>
        </div>
    </div>
</body>

</html>