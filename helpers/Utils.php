<?php

class Utils {
    public static function deleteSession(string $name): void
    {
        if(isset($_SESSION[$name]))
        {
            $_SESSION[$name] = null;
        }
    }

    public static function validateNames(string $name): bool
    {
        return (!is_numeric($name) && !preg_match('/[0-9]/', $name));
    }

    public static function validateEmail(string $email): bool
    {
        return (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}