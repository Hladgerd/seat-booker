<?php

namespace Core;

class Controller
{
    public function view($view): void
    {
        if(file_exists("../private/Views/" . $view . ".view.php"))
        {
            require ("../private/Views/" . $view . ".view.php");
        }else{
            echo "Ez az oldal nem található...";
        }
    }
}
