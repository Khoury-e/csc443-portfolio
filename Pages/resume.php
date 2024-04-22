<html>
    <?php 
        session_start();
        if(!isset($_SESSION['user'])) {
            echo "Must be Logged In to access this page";
            die();
        } else {
            include("header.php");
        }
    ?>
    <head>
        <link rel="stylesheet" href="../CSS/main-style.css" />
        <link rel="stylesheet" href="../CSS/custom-icons.css">
        <link rel="stylesheet" href="../CSS/resume.css">
        <title>
            Personal Profile: Elias Khoury
        </title>
    </head>
    <body>
        <div class="content">
                <div id="education">
                    <h2>Education</h2>
                    <div class="education-info">
                            <p>BS Computer Science - Lebanese American University</p>
                            <p>Sept 2021-Present</p>
                    </div>
                </div>  

                <div id="experience">
                    <h2>Experience</h2>
                    <div class="experience-info">
                        <div>
                            <h4> Web Developer Intern (Integrated Digital Systems)</h4>
                            <p>May 2023 - July 2023</p>
                        </div>
                        <div>
                            <ul>
                                <li>Learned backend development with .NET framework.</li>
                                <li>Built an API with .NET, and connected it to my database built in MS SQL <S></S>erver</li>
                                <li>Applied API logic on a full-stack project: a room reservation system</li>
                                <li>Built the front-end of the project with HTML, CSS, JS, jQuery, and AJAX</li>
                            </ul>
                        </div>
                    </div>

                    <div class="experience-info">
                        <div>
                            <h4 class="m-0"> Web Developer Intern (Kamkalima)</h4>
                            <p class="italian-font m-0">July 2023 - August 2023</p>
                        </div>
                        <div>
                            <ul>
                                <li>Applied full-stack web development methodolgies: CRUD, working with APIs.</li>
                                <li>Learned and implemented real-life tasks in a front-end framework: VueJS.</li>
                                <li>Worked on tasks for the server-side using a backend framework: Laravel PHP.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            <div id="skills">
                <h2>Skills</h2>
                <ol>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>VueJS</li>
                    <li>PHP (Laravel)</li>
                    <li>Flutter</li>
                    <li>MS SQL, MySQL</li>
                </ol>
            </div>
        </div>
    </body>
</html>