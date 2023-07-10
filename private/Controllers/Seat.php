<?php

namespace Controllers;

use Core\Controller;

class Seat extends Controller
{
    public function getSeatStatus(int $id): string
    {
        return $this->model->getStatusById($id);
    }

    public function getSeatPrice(int $id): int
    {
        return $this->model->getPriceById($id);
    }

}
