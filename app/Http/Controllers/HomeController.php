<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

Use Alert;


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
        $user = User::find(Auth::user()->user_id);
        $has_bus=false;
        $has_fam=false;
        if ($user->business_user_id!=null) {
            $has_bus=true;
        } else {
            if ($user->family_user_id!=null) {
                $has_fam=true;
            }
        }
        return view("main.mainscreen")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
}
