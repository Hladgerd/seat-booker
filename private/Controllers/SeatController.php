<?php

namespace Controllers;

use Core\Controller;

class SeatController extends Controller
{
    function index(): void
    {
        $this->view("seat");
    }
}
