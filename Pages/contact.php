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
        <link rel="stylesheet" href="../CSS/custom-icons.css">
        <title>
            Contact Me
        </title>
    </head>
    <style>
        #content {
            position: relative;
            top: 50px;
            height: 100%;
            text-align: center;
        }

        .contact {
            border-radius: 30px;
            width: 600px;
            height: 350px;
            background-color: #afa8a8d2;
            font-size: large;
            position: relative;
            top: 60px;
            left: 30%;
            text-align: center;
        }

        .contact-info {
            width: 100%;
            height: 70px;
        }

        ul {
            padding: 0;
            margin: 0;
            position: relative;
            top: 20%;
        }

        .contact li {
            list-style-type: none;
        }
    </style>
    <body>
        <?php 
            include('header.php');
        ?>
        <div id="content">
            <div class="contact">
                <ul>
                    <div class="contact-info">
                        <li>
                            <i class="ico mail-i"></i>
                            <a href="mailto:khouryelias04@gmail.com">khouryelias04@gmail.com</a>
                        </li>
                    </div>
                    <div class="contact-info">
                        <li>
                            <i class="ico linkedin-i"></i>
                            <a href="https://www.linkedin.com/in/elias-khoury-lau">My LinkedIn</a>
                        </li>
                    </div>
                    <div class="contact-info">
                        <li>
                            <i class="ico github-i"></i>
                            <a href="https://www.github.com/Khoury-e">Khoury-e</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </body>
</html>