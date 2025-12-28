<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function index()
    {
        $data = array('page'=>'customer/customer_view');        
        return view('layout/main',$data);
    }
}
