<?php

namespace App\Http\Repositories;
use Illuminate\Support\Facades\DB;
class SqlEvent{
    public function getSomeEventLists($count){
        $results = DB::table('events')->select('e_name','e_place', 'e_date', 'e_image', 'g_name', 'e_date')
        ->join('groups', 'events.Group_g_uuid', '=', 'groups.g_id')->limit($count)->latest('events.created_at')->get();
        return $results;
    }
}