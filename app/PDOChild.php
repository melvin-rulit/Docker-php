<?php

namespace App;

use PDO;
use App\Contracts\PDOChildInterface;

class PDOChild extends PDO implements PDOChildInterface
{
    public function __construct($dsn, $username = null, $password = null)
    {
        try {
            parent::__construct($dsn, $username, $password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}