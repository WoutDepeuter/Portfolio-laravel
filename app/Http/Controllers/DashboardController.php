<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('profile.show', ['id' => Auth::user()->id]);
        }

        $users = User::all();
        return view('dashboard', compact('users'));
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

