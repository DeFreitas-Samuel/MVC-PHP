<?php

class db {
    public static function dbConnection():mysqli{
        return new mysqli("localhost", "root", "", "tienda_master");
    }
}