<?php

namespace App\FrameworkTools\Implementations\FactoryMethods;

trait BreakStringInVars {

    public function breakStringInVars($requestUri){
        $urlAndVars = explode("?",$requestUri);

        if (lisset($urlAndVars[1])){
            return;
        }

        $stringWithVars = $stringWithVars[1];
        $stringWithVars = explode("&",$stringWithVars);

        $varsOfUrl = array_map(function($element){
            return explode("=",$element);
        },$arrayWithVars);

        DD($varsOfUrl);

    }

}