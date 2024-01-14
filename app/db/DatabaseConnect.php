<?php

namespace App\db;

use App\Contracts\DatabaseInterfaces;
use App\Contracts\PDOChildInterface;

class DatabaseConnect
{
    private PDOChildInterface $connection;

    public function __construct(PDOChildInterface $connection)
    {
        $this->connection = $connection;
    }

    public function getConnection(): PDOChildInterface
    {
        return $this->connection;
    }

}