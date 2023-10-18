<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App_User;

class App_User_Controller extends Controller
{
    public function index(){
        return view('app_users.index');
    }

    public function addview(){
        return view('app_users.addpage');
    }

    public function add(Request $request){
        // dd($request);
        $messages = [
            'nama.required' => 'Kolom nama wajib diisi.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Kolom password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal :min karakter.',
        ];

        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ], $messages);

        $newApp_User = App_User::create($data);

        return redirect(route('app_user.index'));
    }
}
