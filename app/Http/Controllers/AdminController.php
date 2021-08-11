<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        if(Auth()->user()->isSuperAdmin()){
            $users = User::all();
            return view('dashboard', ['users' => $users]);
        } else {
            return redirect(route('parts.index'));
        }

    }
}
