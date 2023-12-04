<?php

namespace App\Http\Repositories;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
class SqlEvent{
    public function getSomeEventLists($count){
        $results = DB::table('events')->select('e_name','e_place', 'e_date', 'e_image', 'g_name', 'e_date')
        ->join('groups', 'events.Group_g_uuid', '=', 'groups.g_id')->limit($count)->latest('events.created_at')->get();
        return $results;
    }

    public function persist(Event $event){
        DB::table('events')->upsert([
            'e_id' => $event->getEventId(),
            'e_name' => $event->getEventName(),
            'e_description' => $event->getEventDescription(),
            'e_place' => $event->getEventPlace(),
            'e_image' => $event->getEventImage(),
            'e_date' => $event->getEventDate(),
            'Group_g_uuid' => $event->getEventGroup(),
            'e_event_host' => $event->getEventHost(),
        ],'e_id');
    }
}