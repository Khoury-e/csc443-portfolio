<?php 
    session_start();

    if (isset($_SESSION['user'])) {
        session_destroy();
        header('location: ../Pages/index.html');
    } else {
        echo "Not Signed In";
    }
<?php 
    session_start();

    if (isset($_SESSION['user'])) {
        session_destroy();
        header('location: ../Pages/index.html');
    } else {
        echo "Not Signed In";
    }
?>