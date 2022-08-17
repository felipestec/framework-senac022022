<?php

namespace App\FrameworkTools\Implementations\FactoryMethods;

use App\FrameworkTools\Abstracts\FactoryMethods\AbstractFactoryMethods;
use App\FrameworkTools\ProcessServerElements;

use App\FrameworkTools\Implementations\FactoryMethods\BreakStringInVars;

class FactoryProcessServerElement extends AbstractFactoryMethods {

    use BreakStringInVars;

    private $processServerElements;

    public function  __construct(){
        $this->processServerElements = ProcessServerElements::start(); //:: estático

    }

    public function operation() {
        //Vamos fazer mais codigo aqui
        $this->processServerElements->setDocumentRoot($_SERVER['DOCUMENT_ROOT']);
        $this->processServerElements->setServerName($_SERVER['SERVER_NAME']);
        $this->processServerElements->setHttpHost($_SERVER['HTTP_HOST']);
        $this->processServerElements->setUri($_SERVER['REQUEST_URI']);

        $this->breakStringInVars($_SERVER['REQUEST_URI']);
        dd($this->processServerElements);
    }
    
    // -> nao estático
}