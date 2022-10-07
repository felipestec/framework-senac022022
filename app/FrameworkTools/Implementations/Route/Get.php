<?php

namespace App\FrameworkTools\Implementation\Route;
use App\Controllers\InsertDataController;

trait Get{
    private static function get() {
        switch (self::$processServerElements->getRoute()) {
    
            case '/hello-world':
                return (new HelloWorldController)->execute();
            break;
    
            case '/train-query':
                return (new TrainQueryController)->execute();
            break;
        }         
    }
}