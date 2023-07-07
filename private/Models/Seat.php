<?php

namespace Models;

use Core\Model;

class Seat extends Model
{
    private mixed $db;

    public function __construct()
    {
        $this->db = self::getDB();
    }

    public function getAll()
    {
        $statement = $this->db->query('SELECT * FROM seats ORDER BY seatID');
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getStatusById(int $id): string
    {
        $statement = $this->db->prepare('SELECT status FROM seats WHERE seatID = :id');
        $statement->bindParam(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }


    public function getPriceById(int $id): int
    {
        $statement = $this->db->query('SELECT price FROM seats WHERE seatID = :id');
        $statement->bindParam(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function updateStatusById(int $id, string $status)
    {
        $statement = $this->db->prepare('UPDATE seats SET status = :status, WHERE seatID = :id');
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->bindValue(':status', $status);
        return $statement->execute();
    }

}
