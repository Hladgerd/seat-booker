<?php

namespace Core;


abstract class Controller
{
    public function index(string $view): void
    {
        View::render($view);
    }
}
