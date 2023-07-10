<?php

namespace Core;

use Models\SeatModel;

abstract class Controller
{
    protected View $view;
    protected SeatModel $model;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new SeatModel();
    }
}
