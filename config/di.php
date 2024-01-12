<?php

use App\Contracts\PDOChildInterface;
use App\PDOChild;
use App\PDOChildFactory;

return [

    PDOChildInterface::class => function (\DI\Container $container) {
        $pdoChild = PDOChildFactory::create(getenv('MYSQL_HOST'));
        $pdoChild->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdoChild->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Добавьте другие настройки, если необходимо
        return $pdoChild;
    },

];
