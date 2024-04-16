<?php
    class User {
        public $uname;
        public $fname;
        public $pass;
        public $confirmPass;
        public $dob;
        public $gender;
    }

    function addUser($user) {
        $file = file_get_contents("users.json");
        $data = json_decode($file, true);

        $userExists = false;
        foreach($data as $d) {
            if($d['username'] == $user->uname) {
                $userExists = true;
                break;
            }
        }

        if($userExists) {
            echo "User Already Exists! Cannot Sign Up";
            exit;
        }
        
        else {
            $addData = array(
                'username'=>$user->uname,
                'fullname'=>$user->fname,
                'password'=>$user->pass,
                'dateOfBirth'=>$user->dob,
                'sex'=>$user->gender
            );
    
            $data[] = $addData;
            return json_encode($data);
        }
    }

    $user = new User();
    $username = $_POST['username'];
    $fullName = $_POST['fullname'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $dateOfBirth = $_POST['dob'];
    $sex = $_POST['sex']; 

    $user->uname = $username;
    $user->fname = $fullName;
    $user->pass = $password;
    $user->confirmPass = $confirm;
    $user->dob = $dateOfBirth;
    $user->gender = $sex;

    $add = addUser($user);
    $file = "users.json";
    if(file_put_contents("$file", $add)) {
        header('location:../Pages/login.html');
    } else {
        echo "Error";
    }
?>