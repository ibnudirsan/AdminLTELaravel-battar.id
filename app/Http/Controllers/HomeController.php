<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $verify = DB::table('users')
        ->select('email_verified_at')
        ->where('id',Auth::user()->id)
        ->first();
        // dd($verify);

        return view('home',[
            'verify'    => $verify
        ]);
    }
}
