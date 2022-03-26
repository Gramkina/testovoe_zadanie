<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(Request $request, $id)
    {
        Auth::loginUsingId($id);
        return redirect()->route('product.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('product.index');
    }

}
