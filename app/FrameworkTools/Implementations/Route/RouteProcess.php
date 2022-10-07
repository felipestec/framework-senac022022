<?php

namespace App\FrameworkTools\Implementations\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWorldController;
use App\Controllers\InsertDataController;
use APP\Controllers\InsertDataControllerPost;

use App\FrameworkTools\Implementation\Route\Get;
use App\FrameworkTools\Implementation\Route\Post;


class RouteProcess {

    private static $processServerElements;

    public static function execute() {
        self::$processServerElements = ProcessServerElements::start();
        $routeArray = [];

        switch (self::$processServerElements->getVerb()) {
            case 'GET':
                return self::get();
            case 'POST':
                return self::post();
        }
    }

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
