<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::id();
        $user = User::find($uid);
        $userToken = $user->api_token;
        return view('welcome', compact('userToken'));
    }
    public function jsonPage()
    {
        $uid = Auth::id();
        $user = User::find($uid);
        $userToken = $user->api_token;
        return view('json', compact('userToken'));
    }
    public function soapPage()
    {
        $uid = Auth::id();
        $user = User::find($uid);
        $userToken = $user->api_token;
        return view('soap', compact('userToken'));
    }
}
