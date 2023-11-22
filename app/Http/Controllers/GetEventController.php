<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Repositories\SqlEvent;

class GetEventController extends Controller
{
    public function GetSomeEventLists(SqlEvent $sqlEvent){
        $results = $sqlEvent->GetSomeEventLists(3);
        return view('index', ['results' => $results]);

    }
}
