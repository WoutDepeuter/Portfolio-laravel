<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [];
        if (Auth::user()->role === 'admin') {
            $users = User::all();
        }

        return view('dashboard', ['users' => $users]);
    }
}
