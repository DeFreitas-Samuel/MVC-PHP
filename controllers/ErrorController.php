<?php

class ErrorController
{
    public function index(){
        echo "<h1>The page you're looking for does not exist!</h1>";
    }

    public function user(){
        echo "<h1>Something went wrong with your user creation</h1>";
    }

}