<?php

namespace App\FrameworkTools\Implementation\Route;

trait Post{
    private static function post() {
        switch (self::$processServerElements->getRoute()) {
            case '/insert-data':
                return (new InsertDataController)->exec();
            break;

            case '/carinsert':
                return (new InsertDataControllerTrab)->exec();
            break;
        }
                
    }
}