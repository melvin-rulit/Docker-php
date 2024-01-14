<?php

namespace App;

use http\Exception\InvalidArgumentException;


class PDOChildFactory
{
        public static function create($connectionType): PDOChild
        {
        switch ($connectionType) {

            case 'pgsql':
                return new PDOChild("pgsql:host=" .getenv('MYSQL_HOST') . ";dbname=" . getenv('MYSQL_DATABASE'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));

            case 'mysql':
                return new PDOChild("mysql:host=" .getenv('MYSQL_HOST') . ";dbname=" . getenv('MYSQL_DATABASE'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));

            case 'sqlite':
                return new PDOChild('sqlite:' . __DIR__ . '/db/database.sqlite');

            default:
                throw new InvalidArgumentException("Unsupported connection type: $connectionType");
        }
    }

}