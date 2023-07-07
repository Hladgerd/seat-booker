<?php

namespace Core;

class View
{

    public static function render(string $view): void
    {
        $file = "private/Views/$view.view.php";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }

}