<?php

namespace Core;

use Models\SeatModel;

abstract class Controller
{
    private View $view;
    protected SeatModel $model;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new SeatModel();
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
