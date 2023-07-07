<?php

namespace Controllers;

use Core\Controller;
use Core\View;

class SeatController extends Controller
{
    public function indexAction(): void
    {
        View::render('seat');
    }
}
