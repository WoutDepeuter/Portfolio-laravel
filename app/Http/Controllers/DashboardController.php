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
            $users = User::where('id', '!=', Auth::id())->get();
        }

        return view('dashboard', ['users' => $users]);
    }
    public function promoteToAdmin($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->role = 'admin';
            $user->save();
        }

        return redirect()->route('dashboard');
    }
    public function demoteToUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->role = 'user';
            $user->save();
        }

        return redirect()->route('dashboard');
    }
    public function removeAccount($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }

        return redirect()->route('dashboard');
    }
}

