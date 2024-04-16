<html>

<head>
    <link rel="stylesheet" href="../../CSS/main-style.css">
    <link rel="stylesheet" href="../../CSS/gallery.css">
    <link rel="stylesheet" href="../../CSS/custom-icons.css">
    <title>
        QR Generator App
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
        margin-bottom:40px;
    }

    .gallery {
        display: inline-block;
        margin-bottom: 20px;
        border: 1px solid black;
        height: 300px;
        width: 800px;
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
        <h1>QR Generator App</h1>

        <div class="gallery">
                <?php 
                    $file = fopen("QrGenerator.txt", "r");
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
            <p>A client-server application that allows generating a QR code from a link. User (client) enters a URL as an
                input and the server will generate the QR code and send it back to the client. This was applied using Python
                socket programming. The application also contains a basic login system of pre-defined users in a JSON file.
            </p>
    
            <h3>Collaborator(s):</h3>
            <li>
                Mohammad Souki
            </li>
            <h3>Technology(ies):</h3>
            <ul>
                <li>Python (libraries: socket, tkinter, Pillow, threading). </li>
            </ul>
            <h3>Source Code:</h3>
            <p>
                <a href="https://www.github.com/Khoury-e/QRGenerator">www.github.com/Khoury-e/QRGenerator</a>
            </p>
        </div>
    </div>
</body>

</html>