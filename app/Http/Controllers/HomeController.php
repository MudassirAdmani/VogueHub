<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // login work
    public function redirect()
    {
        // check usertype
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        } else {
            return view('home.userpage');
        }
    }
    // default page
    public function index()
    {
        return view('home.userpage');
    }
}
