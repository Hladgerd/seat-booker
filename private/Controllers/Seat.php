<?php

namespace Controllers;

use Core\Controller;

class Seat extends Controller
{
    public function index(): void
    {
        $dataSet = $this->model->getAll();
        $this->view->render("seat", $dataSet);
    }

}

