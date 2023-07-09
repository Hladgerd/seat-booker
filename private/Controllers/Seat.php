<?php

namespace Controllers;

use Core\Controller;
use Models\SeatModel;

class Seat extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new SeatModel();
    }

}
