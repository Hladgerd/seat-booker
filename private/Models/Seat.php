<?php

namespace Models;

class Seat
{
    protected int $id;
    protected int $seat_nr;
    protected string $status;
    protected float $price;

    // GET METHODS
    public function getId(): int
    {
        return $this->id;
    }

    public function getSeatNr(): int
    {
        return $this->seat_nr;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getPrice(): float
    {
        return $this->price;
    }


    // SET METHODS
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function setPrice(string $price): void
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