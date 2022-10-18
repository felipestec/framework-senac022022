<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\InsertDataController;
use App\Controllers\InsertDataControllerPost;



trait Post {
    private static function post() {
        switch (self::$processServerElements->getRoute()) {
            case '/insert-data':
                return (new InsertDataController)->exec();
            break;

            case '/carinsert':
                return (new InsertDataControllerPost)->exec();
            break; 
        }
                
    }
}
