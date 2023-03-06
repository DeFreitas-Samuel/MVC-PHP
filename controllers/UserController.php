<?php
require_once "models/User.php";


class UserController
{
    public function index(){
        echo "User Index action!";
    }

    public function signUp(){
        require_once 'views/user/registerView.php';
    }

    public function logIn(){
        $userLogin = new User();
        $userLogin->setEmail($_POST["email"]);
        $userLogin->setPassword($_POST["password"]);

        $login = $userLogin->logInUser();

        if($login){
            $_SESSION["user"] = $login;
            var_dump($login);
        }

    }

    public function saveUser(){
        if(!empty($_POST)){

            $firstname = $_POST['name'] ?? false;
            $lastname =$_POST['lastname'] ?? false ;
            $email = $_POST['email'] ?? false;
            $password = $_POST['password'] ?? false;
            $role = $_POST['role'] ?? false;

            $firstname = Utils::validateNames($firstname) ? $firstname : false;
            $lastname = Utils::validateNames($lastname) ? $lastname : false;
            $email = Utils::validateEmail($email) ? $email : false;


            if ($firstname && $lastname && $email && $password && $role){

                $newUser = new User();
                $newUser->setName($firstname);
                $newUser->setLastname($lastname);
                $newUser->setEmail($email);
                $newUser->setPassword($password);
                $newUser->setRole($role);
                $result = $newUser->saveUserDb();

                if ($result){
                    $_SESSION["signup"] = "Complete";
                }
                else{
                    $_SESSION["signup"] = "Failed";
                }
            }
            else {
                $_SESSION["signup"] = "Failed";
            }
            header("location:".base_url."user/signup");


        }
    }


}