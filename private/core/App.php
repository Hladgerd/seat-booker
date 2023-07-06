<?php

/**
 * main app file
 */
class App
{
    private $controller = "home";
    private $method = "index";
    private $params = array();

    public function __construct()
    {
        echo "App constructor";
    }
}
