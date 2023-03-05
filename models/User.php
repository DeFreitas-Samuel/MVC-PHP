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


    public function __construct(string $name, string $lastname, string $email, string $password, string $role, string $image = "")
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->image = $image;

    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function saveUserDb(){
        $dbConnection = db::dbConnection();
        $sql = "INSERT INTO usuarios VALUES ('','$this->name', '$this->lastname', '$this->email','$this->password' , '$this->role', '$this->image' )";
        $dbConnection->query($sql);
    }

}