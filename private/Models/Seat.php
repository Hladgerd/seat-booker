<?php

namespace Models;

class Seat
{
    private int $id;
    private string $status;
    private string $age;
    private int $price;

    // GET METHODS
    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getPrice(): int
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
