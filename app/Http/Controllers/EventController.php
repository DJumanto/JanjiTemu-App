<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\EventServices\CreateEventService;
use App\Http\Services\UserGroupServices\GetGroupPermisionService;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventController extends Controller
{
    
    public function index(){
        return view('createevent');
    }
    public function CreateEvent(Request $request, CreateEventService $createEventService, GetGroupPermisionService $getGroupPermisionService){
        // $request->validate([
        //     'e_name'        => 'required|string|max:255',
        //     'e_description' => 'required|string',
        //     'e_place'       => 'required|string|max:255',
        //     'e_image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'e_date'        => 'required|date',
        //     'group_id'      => 'required|string',
        // ]);
        $uid = Auth::user()->id;
        $data = $getGroupPermisionService->execute($uid, $request->input('group_id'));
        // dd($data);
        if(!isset($data->Group_Role_gr_id)){
            dd('bjir gagal');
            return redirect()->route('createevent',['status'=>'anda tidak memiliki akses untuk membuat event']);
        }
        if($data->Group_Role_gr_id == 3){
            dd('bjir gagal');
            return redirect()->route('createevent',['status'=>'andat tidak memiliki akses untuk membuat event']);
        }
        else{
            $ug_id = $data->ug_id;
        }

        $imageName = time() . '_' . $request->file('e_image')->getClientOriginalName();
        $imagePath = $request->file('e_image')->storeAs('public/eventimages', $imageName);
        $event = new Event(
            Str::uuid(),
            $request->input('e_name'),
            $request->input('e_description'),
            $request->input('e_place'),
            $imagePath,
            $request->input('e_date'),
            $request->input('group_id'),
            $ug_id,
        );
        
        DB::beginTransaction();
        try{
            $createEventService->execute($event);
        }
        catch(\Exception $e){
            DB::rollback();
            throw $e;
        }
        DB::commit();
        dd('success');
        return redirect()->route('index',['status'=>'success membuat event']);
    }
    public function SearchEvent(){}
    public function UpdateEvent(){}
    public function DeleteEvent(){}
}
