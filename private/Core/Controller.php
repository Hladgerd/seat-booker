<?php

namespace Core;


abstract class Controller
{
    public function index(string $view): void
    {
        View::render($view);
    }

    public function redirect(string $link)
    {
        header("Location: ". ROOT . "/".trim($link,"/"));
        exit();
    }
}
