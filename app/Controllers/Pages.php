<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

      
        return view('sapi/index');
        
        
    }

    public function detail(){
        
      
        return view('sapi/detail');
    }

    
}
