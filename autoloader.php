<?php


function controller_autoload(string $template)
{
    include "controllers/" . $template . ".php";


}

spl_autoload_register('controller_autoload');