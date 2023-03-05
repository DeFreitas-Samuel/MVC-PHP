<?php
require_once "models/User.php";
//require_once "config/db.php";

class UserController
{
    public function index(){
        echo "User Index action!";
    }

    public function signUp(){
        require_once 'views/user/registerView.php';
    }

    public function saveUser(){
        if(!empty($_POST)){
            $db = db::dbConnection();

            $unsafe_password = mysqli_real_escape_string($db,$_POST['password']) ?? false;

            $firstname = mysqli_real_escape_string($db,$_POST['name']) ?? false;
            $lastname = mysqli_real_escape_string($db,$_POST['lastname']) ?? false;
            $email = mysqli_real_escape_string($db,$_POST['email']) ?? false;
            $securePassword = password_hash($unsafe_password, PASSWORD_BCRYPT, ['cost'=>4]);
            $role = mysqli_real_escape_string($db,$_POST['role']) ?? false;

            if ($firstname && $lastname && $email && $unsafe_password && $role){
                $newUser = new User($firstname, $lastname, $email, $securePassword, $role);
                $newUser->saveUserDb();
                var_dump($newUser);
            }


            var_dump($_POST);
        }
    }


}