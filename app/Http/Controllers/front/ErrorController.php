<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error404(){
        $data = array();
        $data['title'] = 'Error 404';

        return view('front.error.404', $data);
    }
}
