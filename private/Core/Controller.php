<?php

namespace Core;


abstract class Controller
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index(string $view): void
    {
        $this->view->render($view);
    }

    public function redirect(string $link)
    {
        header("Location: ". ROOT . "/".trim($link,"/"));
        exit();
    }
}
