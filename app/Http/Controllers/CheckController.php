<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class CheckController extends Controller
{

    public function check()
    {
        $circles = User::find(0)->circles;
        return $circles;
    }
}
