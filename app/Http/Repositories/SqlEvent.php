<?php

namespace App\Http\Repositories;
use Illuminate\Support\Facades\DB;
class SqlEvent{
    public function GetSomeEventLists($count){
        $results = DB::table('events')->select('e_name','e_place', 'e_date', 'e_image', 'g_name', 'e_date')
        ->join('groups', 'events.Group_g_uuid', '=', 'groups.g_id')->limit($count)->latest('events.created_at')->get();
        foreach($results as $result){
            $splitted = explode(" ", $result->e_date);
            $result->e_date = date('l, d F Y', strtotime($splitted[0]));
            $result->e_time = date('h:i A', strtotime($splitted[1]));
        }
        return $results;
    }
}