<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App_User_Controller extends Controller
{
    public function index(){
        return view('app_users.index');
    }

    public function addview(){
        return view('app_users.addpage');
    }

    public function add(Request $request){
        dd($request);
    }
}
