<?php

namespace App\Http\Controllers;

use App\Mail\RegisterUser;
use Illuminate\Http\Request;
use App\User;
use App\Mail;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        \Mail::to($user)->send(new RegisterUser());

        return view('dashboard')->with('listings', $user->listings);
    }
}
