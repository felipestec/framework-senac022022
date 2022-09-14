<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;
use App\FrameworkTools\DatabaseConnection;

class InsertDataController extends AbstractControllers{

    public function exec (){
       
        view([
            "sucess" => true         
            
        ]);
    }
}