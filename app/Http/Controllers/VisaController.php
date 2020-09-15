<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\ExternalConfiguration;


class VisaController extends Controller
{
    public function index(){
        $merObj = new ExternalConfiguration();    
        $merchantConfigObj = $merObj->merchantConfigObject();     
        return 'yes';
    }
}
