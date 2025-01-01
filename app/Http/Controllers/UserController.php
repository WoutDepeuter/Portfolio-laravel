<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.Profile', compact('user'));
    }
}
