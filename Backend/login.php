<?php 
    session_start();
    $uname = $_POST['username'];
    $password = $_POST["password"];

    function login($username, $password) {
        $file = file_get_contents("users.json");
        $data = json_decode($file, true);

        $logged = false;
        for($i = 0; $i<sizeof($data);$i++) {
            $u = $data[$i]['username'];
            $p = $data[$i]['password'];

            if($u==$username && $p==$password) {
                $logged = true;
                break;
            }
        }

        if ($logged) {
            $_SESSION['user'] = $username;
            header('location:../Pages/bio.php');
        } else {
            echo "Wrong Username Or Password";
        }
    }

    login($uname, $password);
<?php 
    session_start();
    $uname = $_POST['username'];
    $password = $_POST["password"];

    function login($username, $password) {
        $file = file_get_contents("users.json");
        $data = json_decode($file, true);

        $logged = false;
        for($i = 0; $i<sizeof($data);$i++) {
            $u = $data[$i]['username'];
            $p = $data[$i]['password'];

            if($u==$username && $p==$password) {
                $logged = true;
                break;
            }
        }

        if ($logged) {
            $_SESSION['user'] = $username;
            header('location:../Pages/bio.php');
        } else {
            echo "Wrong Username Or Password";
        }
    }

    login($uname, $password);
?>