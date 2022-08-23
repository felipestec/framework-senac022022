<?php

namespace App\FrameworkTools\Implementations\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWorldController;

class RouteProcess{

    public static function execute(){

        $processServerElements = ProcessServerElements::start();
        $routeArray = [];

        switch ($processServerElements->getVerb()){

            case 'GET':

                switch($processServerElements->getRoute()){
                    //dd([$processServerElements->getVerb()]);

                    case '/hello-world':
                        return (new HelloWorldController)->execute();
                    break;
                }
               
            }

        //dd([$getRoutes]);
    }

}