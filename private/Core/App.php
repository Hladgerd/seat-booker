<?php

namespace Core;

class App
{
    private string $controller = "Seat";

    public function __construct()
    {
        $URL = $this->getURL();
        if(file_exists("../private/Controllers/".ucfirst($URL[0]).".php"))
        {
            $this->controller = ucfirst($URL[0]);
        }else
        {
            echo "<h1>Controller not found</h1>";
            die();
        }

        require "../private/Controllers/".$this->controller.".php";
        $this->controller = new $this->controller();

        call_user_func($this->controller .'::index', lcfirst($this->controller));

    }

    private function getURL(): array
    {
        $url = $_GET['url'] ?? "seat";
        return explode("/", filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
    }
}
