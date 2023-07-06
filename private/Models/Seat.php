<?php

namespace Models;

class Seat
{
    protected $id;
    protected $seat_nr;
    protected $status;
    protected $price;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getSeatNr()
    {
        return $this->seat_nr;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getPrice()
    {
        return $this->price;
    }


    // SET METHODS
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }


    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}