<?php

/**
 * main app file
 */
class App
{
    private $controller = "seat";
    private $method = "index";
    private $params = array();

    public function __construct()
    {
        $URL = $this->getURL();
        if(file_exists("../private/Controllers/".$URL[0].".php"))
        {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }

        require "../private/Controllers/".$this->controller.".php";
        $this->controller = new $this->controller();
    }

    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
    }
}
