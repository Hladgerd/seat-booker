<?php

namespace Controllers;

use Core\Controller;
use Core\View;
use Models\Seat;

class SeatController extends Controller
{
    private $model;

    public function __construct(array $route_params)
    {
        parent::__construct($route_params);
        $this->model = new Seat();

    }

    public function indexAction(): void
    {
        View::render('seat');
    }
}
