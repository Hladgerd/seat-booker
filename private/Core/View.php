<?php

namespace Core;

class View
{
    public function render(string $view, $data = array()): void
    {
        extract($data);
        $file = "private/Views/$view.view.php";

        if (is_readable($file)) {
            require $file;
        } else {
            exit("$file not found");
        }
    }
}
