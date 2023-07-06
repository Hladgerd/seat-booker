<?php

namespace Controllers;

use Core\Controller;

class PaymentController extends Controller
{
    function index(): void
    {
        $this->view("payment");
    }
}
