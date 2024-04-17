<html>
    <?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Must be Logged In to access this page";
        die();
    }
    ?>
<head>
    <link rel="stylesheet" href="../CSS/main-style.css">
    <link rel="stylesheet" href="../CSS/projects-style.css">
    <link rel="stylesheet" href="../CSS/custom-icons.css">
    <title>Personal Profile: Elias Khoury</title>
</head>
<body>
    <?php 
        include("header.php");
    ?>
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
                            <a href="../Pages/projects/qr-generator.php">More Details</a>
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
                            <a href="../Pages/projects/Moviebox.php">More Details</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>