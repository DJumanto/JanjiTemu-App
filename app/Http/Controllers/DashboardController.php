<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserServices\GetUserNameByIdService;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index(GetUserNameByIdService $getUserByIdService){
        $result = $getUserByIdService->execute(Auth::user()->id);
        return view('dashboard', ['user' => $result]);
    }
}
