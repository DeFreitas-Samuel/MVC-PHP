<?php

require_once 'config/db.php';


class User
{
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $role;
    private $image;
    private $db;


    public function __construct()
    {
        $this->db = db::dbConnection();
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $this->db->real_escape_string($name);
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname = $this->db->real_escape_string($lastname);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $this->db->real_escape_string($email);
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $this->db->real_escape_string($password);
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $this->db->real_escape_string($role);
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $this->db->real_escape_string($image);
    }

    public function saveUserDb(){
        $hashed_password = password_hash($this->password, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql = "INSERT INTO usuarios VALUES ('','{$this->getName()}', '{$this->getLastname()}', '{$this->getEmail()}','$hashed_password' , '{$this->getRole()}', '{$this->getImage()}' )";
        return $this->db->query($sql);
    }

    public function logInUser(){
        $sql = "SELECT * FROM usuarios WHERE email = '$this->email'";

        $results = $this->db->query($sql);

        if($results->num_rows > 0){
            $user = $results->fetch_object();

            if(password_verify($this->password,$user->password)){
                return $user;
            }
            else{
                return false;
            }


        }
    }

}